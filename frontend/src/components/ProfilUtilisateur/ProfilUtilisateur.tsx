import { CircularProgress } from '@mui/material';
import { FormikValues, Formik, FormikErrors } from 'formik';
import { useState, useEffect, Fragment, useRef } from 'react';
import { useNavigate } from 'react-router';
import { SelectItem } from '../Actif/type';
import { LightType } from '../Actifs/type';
import ProfileUtilisateurForm from './ProfilUtilisateurForm';
import FormLayout from '../FormLayout';
import { toast } from 'react-toastify';
import Historique from '../Historique';

type Utilisateur_Type = {
  id: number;
  nom: string;
  id_role: string;
  id_emplacement: string;
};

type Props = {
  id: string;
  isProfil: boolean;
};
const ProfilUtilisateur = ({ id, isProfil }: Props) => {
  const navigate = useNavigate();
  const [loading, setLoading] = useState(true);
  const [utilisateur, setUtilisateur] = useState<Utilisateur_Type>();
  const [roles, setRoles] = useState<SelectItem[]>([]);
  const [emplacements, setEmplacements] = useState<SelectItem[]>([]);
  const id_user = localStorage.getItem('id_user') || 'unknown'; // retrieve id_user from local storage, default to 'unknown';

  useEffect(() => {
    Promise.all([
      fetch(window.name + 'api/emplacements/light'),
      fetch(window.name + 'api/roles/light'),
      fetch(window.name + `api/utilisateur/${id}`),
    ])
      .then((responses) =>
        Promise.all(responses.map((response) => response.json()))
      )
      .then(([fetchedEmplacements, fetchedRoles, fetchedUtilisateur]) => {
        setRoles(
          fetchedRoles.map((role: LightType) => ({
            id: role.id,
            label: role.nom,
          }))
        );

        setEmplacements(
          fetchedEmplacements.map((localisation: LightType) => ({
            id: localisation.id,
            label: localisation.nom,
          }))
        );
        setUtilisateur(fetchedUtilisateur);
        setLoading(false);
      });
  }, [id]);
  const initialValues = {
    id: utilisateur?.id,
    nom: utilisateur?.nom,
    id_role: utilisateur?.id_role,
    id_emplacement: utilisateur?.id_emplacement,
  };

  const formValuesRef = useRef<FormikValues | null>(null);
  const [open, setOpen] = useState(false);

  const handleClose = () => {
    setOpen(false);
  };

  const handleOpen = () => {
    setOpen(true);
  };

  const handleUpdate = (values: FormikValues) => {
    formValuesRef.current = values;
    handleOpen();
  };

  const handleSubmit = () => {
    const values = formValuesRef.current;
    if (!values) return;
    const data = {
      id_role: values.id_role.id || values.id_role,
      id_emplacement: values.id_emplacement.id || values.id_emplacement,
    };
    fetch(window.name + `api/utilisateur/${id}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-User-Action-Id': id_user, // send the user id in a custom header
      },
      body: JSON.stringify(data),
    }).then((response) => {
      if (response.ok) {
        toast.success('Données sauvegardées avec succès');
        navigate('/utilisateurs');
      } else {
        toast.error('Une erreur est survenue');
      }
    });
  };

  const validate = (values: FormikValues) => {
    const errors: FormikErrors<FormikValues> = {};
    if (values.nom?.length > 32)
      errors.nom = 'Nom ne doit pas dépasser 32 caractères';
    else if (!values.nom) errors.nom = 'Requis';

    if (!values.id_role) errors.id_role = 'Requis';

    if (!values.id_emplacement) errors.id_emplacement = 'Requis';

    return errors;
  };
  return (
    <Fragment>
      {loading ? (
        <div className="fixed inset-0 flex items-center justify-center">
          <CircularProgress />
        </div>
      ) : (
        <div className="mx-auto mt-8">
          {utilisateur && id && (
            <div className="flex flex-col sm:flex-row justify-evenly items-start">
              <Formik
                initialValues={initialValues}
                onSubmit={handleUpdate}
                validate={validate}
              >
                {({ dirty, errors }) => (
                  <FormLayout
                    title={
                      isProfil
                        ? 'Mon Profil'
                        : 'Utilisateur: ' + utilisateur.nom
                    }
                    dirty={dirty}
                    handleConfirm={handleSubmit}
                    open={open}
                    handleClose={handleClose}
                  >
                    <ProfileUtilisateurForm
                      dirty={dirty}
                      emplacements={emplacements}
                      roles={roles}
                      isProfil={isProfil}
                      errors={errors}
                    />
                  </FormLayout>
                )}
              </Formik>
              <div className="w-full sm:mt-0 mt-24  mx-8">
                <Historique id={id} type="utilisateur" />
              </div>
            </div>
          )}
        </div>
      )}
    </Fragment>
  );
};
export default ProfilUtilisateur;

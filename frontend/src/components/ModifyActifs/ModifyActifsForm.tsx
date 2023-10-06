import { Grid, TextField, Button } from '@mui/material';
import { LocalizationProvider, DatePicker } from '@mui/x-date-pickers';
import { AdapterDayjs } from '@mui/x-date-pickers/AdapterDayjs';
import dayjs from 'dayjs';
import { Formik, Field, FormikValues, Form } from 'formik';
import { SyntheticEvent } from 'react';
import { useNavigate } from 'react-router-dom';
import CustomSelect from '../CustomSelect';
import { SelectItem } from '../Actif/type';

type Props = {
  selectedRows: number[];
  modeles: SelectItem[];
  categories: SelectItem[];
  statuts: SelectItem[];
  locataires: SelectItem[];
  emplacements: SelectItem[];
  utilisations: SelectItem[];
  proprietaires: SelectItem[];
};

const ModifyActifsForm = ({
  selectedRows,
  modeles,
  categories,
  statuts,
  locataires,
  emplacements,
  utilisations,
  proprietaires,
}: Props) => {
  const navigate = useNavigate();
  const initialValues = {
    modele: '',
    categorie: '',
    statut: '',
    assigne_a: '',
    emplacement: '',
    en_entrepot: false,
    utilisation: '',
    proprietaire: '',
    date_retour: '',
    note: '',
  };

  const handleSubmit = (values: FormikValues) => {
    const updatedData = {
      ids: selectedRows,
      modele: values.modele?.id,
      categorie: values.categorie?.id,
      statut: values.statut?.id,
      //assigne_a: values.assigne_a?.id,
      emplacement: values.emplacement?.id,
      en_entrepot: values.en_entrepot,
      utilisation: values.utilisation?.id,
      proprietaire: values.proprietaire?.id,
      date_retour: values.date_retour,
      note: values.note,
    };
    fetch(`http://localhost:8000/api/actifs`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(updatedData), // Send the updated data with the mapped field names
    })
      .then((response) => {
        if (response.ok) {
          // Display a success message to the user
          alert('Données sauvegardées avec succès');
          console.log('Données sauvegardées avec succès: ', updatedData);
          navigate('/actifs');
        } else {
          // Handle errors if the API request fails
          console.error('Error saving data:', response.statusText);
          console.log('CA NE FONCTIONNE PAS ', updatedData);
        }
      })
      .catch((error) => {
        // Handle errors if the API request fails
        console.error('Error saving data:', error);
      });
  };

  return (
    <Formik initialValues={initialValues} onSubmit={handleSubmit}>
      {({ values, handleChange, dirty, setFieldValue }) => (
        <Form>
          <Grid container spacing={3}>
            <Grid item xs={6}>
              <Field
                name="modele"
                component={CustomSelect}
                options={modeles}
                label="Modele"
                isClearable
              />
            </Grid>
            <Grid item xs={6}>
              <Field
                name="categorie"
                component={CustomSelect}
                options={categories}
                label="Categorie"
                isClearable
              />
            </Grid>
            <Grid item xs={12}>
              <Field
                name="statut"
                component={CustomSelect}
                options={statuts}
                label="Statut"
                isClearable
              />
            </Grid>
            <Grid item xs={6}>
              <Field
                name="emplacement"
                component={CustomSelect}
                options={emplacements}
                label="Emplacement"
              />
            </Grid>
            <Grid item xs={6}>
              <Field
                type="checkbox"
                name="en_entrepot"
                id="en_entrepot"
                className="mt-5 ml-2"
                checked={values.en_entrepot}
                onChange={(event: SyntheticEvent) => {
                  const target = event.target as HTMLInputElement;
                  setFieldValue('en_entrepot', target.checked);
                }}
              />
              <label htmlFor="en_entrepot" className="ml-4">
                En entrepot
              </label>
            </Grid>
            <Grid item xs={6}>
              <Field
                name="utilisation"
                component={CustomSelect}
                options={utilisations}
                label="Utilisation"
                isClearable
              />
            </Grid>
            <Grid item xs={6}>
              <Field
                name="proprietaire"
                component={CustomSelect}
                options={proprietaires}
                label="Proprietaire"
                isClearable
              />
            </Grid>
            <LocalizationProvider dateAdapter={AdapterDayjs}>
              <Grid item xs={6}>
                <Field
                  component={DatePicker}
                  label="Date de retour"
                  format="DD/MM/YYYY"
                  name="date_retour"
                  className="input-label "
                  clearable
                  sx={{ width: 300 }}
                  slotProps={{
                    field: { clearable: true },
                  }}
                  value={
                    values.date_retour ? dayjs(values.date_retour) : undefined
                  }
                  onChange={(value: Date) => {
                    setFieldValue(
                      'date_retour',
                      value?.toISOString().substring(0, 10) || ''
                    );
                  }}
                />
              </Grid>
            </LocalizationProvider>
            <Grid item xs={12}>
              <Field
                as={TextField}
                label="Note"
                id="note"
                name="note"
                multiline
                rows={4}
                value={values.note}
                onChange={handleChange}
                sx={{ width: '100%' }}
              />
            </Grid>

            <Grid item xs={12}>
              <Button
                className="my-5 mx-5 flex float-right"
                variant="contained"
                color="primary"
                size="medium"
                type="submit"
                disabled={!dirty}
              >
                Sauvegarder
              </Button>
            </Grid>
          </Grid>
        </Form>
      )}
    </Formik>
  );
};

export default ModifyActifsForm;
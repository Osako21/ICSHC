import { Button, Input, Typography } from '@mui/material';
import { useEffect, useState } from 'react';

type Props = {
  handleClose: () => void;
  saveFilters: (label: string) => void;
  selectedFilters: Record<string, string | undefined>;
};

const AddGroupeFiltres = ({
  handleClose,
  saveFilters,
  selectedFilters,
}: Props) => {
  const [label, setLabel] = useState<string>('');

  // Add state for button disabled
  const [isButtonDisabled, setIsButtonDisabled] = useState(true);

  const handleSubmit = () => {
    saveFilters(label);
    handleClose();
  };

  useEffect(() => {
    setIsButtonDisabled(label.trim() === '');
  }, [label]);

  return (
    <div className="max-h-52 overflow-y-auto p-8">
      <div className="mb-4">
        <Typography variant="h4">
          Veuillez donner un nom au groupe de filtres:
        </Typography>
      </div>
      <div>
        <Input
          className="mr-8"
          id="label"
          value={label}
          onChange={(e) => setLabel(e.target.value)}
        />

        <div className="float-right">
          <h3>Filtres sélectionnés:</h3>
          <hr />
          <ul>
            {Object.keys(selectedFilters).map((filterCategory: string) => (
              <ul key={filterCategory}>
                <li className="red font-bold">
                  {selectedFilters[filterCategory]}
                </li>
              </ul>
            ))}
          </ul>
        </div>

        <Button
          className="ml-4"
          variant="contained"
          onClick={handleSubmit}
          disabled={isButtonDisabled} // Set the disabled state of the button
        >
          Enregistrer
        </Button>
      </div>
    </div>
  );
};

export default AddGroupeFiltres;

import { useState } from 'react';
import { FieldProps } from 'formik';
import TextField from '@mui/material/TextField';
import Autocomplete from '@mui/material/Autocomplete';
import { SelectItem } from '../Actif/type';

interface SearchableSelectProps extends FieldProps {
  options: SelectItem[];
  label: string;
  isClearable?: boolean;
  needsId?: boolean;
  disabled?: boolean;
}

const CustomSelect = ({
  field,
  form: { touched, errors, setFieldValue },
  options,
  label,
  isClearable = false,
  needsId = false,
  disabled = false,
}: SearchableSelectProps) => {
  const [inputValue, setInputValue] = useState<string>('');
  const [value, setValue] = useState<SelectItem | null>(
    options[field.value - 1]
  );

  return (
    <Autocomplete
      disabled={disabled}
      placeholder={label}
      options={options}
      sx={{ width: 300 }}
      disableClearable={!isClearable}
      defaultValue={options[field.value - 1]}
      getOptionLabel={(option) => {
        if (needsId) return option.id + ' - ' + option.label;
        return option.label;
      }}
      inputValue={inputValue}
      value={value}
      onChange={(_, newValue) => {
        setFieldValue(field.name, newValue);
        setValue(newValue);
      }}
      onInputChange={(_, newInputValue) => {
        setInputValue(newInputValue);
      }}
      isOptionEqualToValue={(option, value) => option.id === value.id}
      renderInput={(params) => (
        <TextField
          {...params}
          label={label}
          disabled={disabled}
          variant="outlined"
          error={touched[field.name] && Boolean(errors[field.name])}
        />
      )}
    />
  );
};

export default CustomSelect;

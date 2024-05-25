import * as React from 'react';
import dayjs from 'dayjs';
import { DemoContainer } from '@mui/x-date-pickers/internals/demo';
import { LocalizationProvider } from '@mui/x-date-pickers/LocalizationProvider';
import { AdapterDayjs } from '@mui/x-date-pickers/AdapterDayjs';
import { DatePicker } from '@mui/x-date-pickers/DatePicker';
import ReactDOM from 'react-dom/client';
export default function DatePickerValue({label}) {
  const [value, setValue] = React.useState(dayjs('2022-04-17'));

  return (
    <LocalizationProvider dateAdapter={AdapterDayjs}>
      <DemoContainer components={['DatePicker', 'DatePicker']}>
        <DatePicker label={label} defaultValue={dayjs('2022-04-17')} />
      </DemoContainer>
    </LocalizationProvider>
  );
}

// Render the component into the DOM
document.addEventListener('DOMContentLoaded', function() {
    const datePickerElements = document.querySelectorAll('.datePicker');

    datePickerElements.forEach((element) => {
      const label = element.getAttribute('data-label');
      const root = ReactDOM.createRoot(element);

      // Render your component inside each root instance with the retrieved label
      root.render(<DatePickerValue label={label} />);
    });
  });
import * as React from 'react';
import { DemoContainer } from '@mui/x-date-pickers/internals/demo';
import { AdapterDayjs } from '@mui/x-date-pickers/AdapterDayjs';
import { LocalizationProvider } from '@mui/x-date-pickers/LocalizationProvider';
import { TimePicker } from '@mui/x-date-pickers/TimePicker';
import ReactDOM from 'react-dom/client';
import AccessAlarmsIcon from '@mui/icons-material/AccessAlarms';
import dayjs from 'dayjs';
const defaultValue = dayjs().set('hour', 9).set('minute', 0);

  export default function BasicTimePicker({label}) {
    return (
      <LocalizationProvider dateAdapter={AdapterDayjs}>
        <DemoContainer components={['TimePicker']}>
          <TimePicker
            style={{ backgroundColor: 'white' }} 
            defaultValue={defaultValue}
            label={label}
            slots={{
              openPickerIcon: AccessAlarmsIcon
            }}      
            slotProps={{
              inputAdornment: {
                position : 'start',
                style: { marginRight: '1%' } 
              }
            }}
          />
        </DemoContainer>
      </LocalizationProvider>
    );
  }
  

// No changes needed for the document event listener
document.addEventListener('DOMContentLoaded', function () {
  const timePickerElements = document.querySelectorAll('.time');
  
  timePickerElements.forEach((element) => {
    const label = element.getAttribute('data-label');
    const root = ReactDOM.createRoot(element);
    root.render(<BasicTimePicker label = {label} />);
  });
});

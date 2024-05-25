import IntlTelInput from 'intl-tel-input/react/build/IntlTelInput.esm';

<IntlTelInput
  initialValue={value}
  onChangeNumber={setNumber}
  onChangeValidity={setIsValid}
  onChangeErrorCode={setErrorCode}
  // any initialisation options from the readme will work here
  initOptions={{
    initialCountry: "us",
    utilsScript: "/intl-tel-input/js/utils.js?1707906286003",
  }}
/>
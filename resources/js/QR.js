import React, { useState } from 'react';
import { QRCode } from 'react-qrcode-logo';
import { SketchPicker, TwitterPicker } from 'react-color';
import logoImageOG from "../images/ARA.jpg";
import ReactDOM from 'react-dom/client';
import { useRef,useEffect } from 'react';
import rgbHex from "rgb-hex";

function MyQRCodeComponent({ shape, color, cornerColor, logoImage }) {
  const [logo, setLogo] = useState(logoImage);

  useEffect(() => {
    setLogo(logoImage);
  }, [logoImage]);
  return (
    <QRCode 
      value="https://github.com/gcoro/react-qrcode-logo" 
      size={150}
      logoImage={logo}
      fgColor={color}
      eyeColor={cornerColor}
      removeQrCodeBehindLogo = {true}
      id = {"CurrentQR"}
      qrStyle={shape}
    />
  );
}

function App() {
  const downloadCode = () => {
    const canvas = document.getElementById("CurrentQR");
    if(canvas) {
      const pngUrl = canvas
        .toDataURL("image/png")
        .replace("image/png", "image/octet-stream");
      let downloadLink = document.createElement("a");
      downloadLink.href = pngUrl
      downloadLink.download = QR.png;
      document.body.appendChild(downloadLink);
      downloadLink.click();
      document.body.removeChild(downloadLink);
    }
  }
  const fgColor = '#000000'
  const cornerColor = '#000000'
  const logoDefault = logoImageOG
  const [selectedColor, setSelectedColor] = useState(fgColor); // Initial color
  const [selectedCornerColor, setSelectedCornerColor] = useState(cornerColor); // Initial color
  const [logoImage, setLogoImage] = useState(logoDefault);
  const [shape, setShape] = useState('squares');
  const fileInputRef = useRef(null);

  const handleColorChange = (c) => {
    setSelectedColor("#" + rgbHex(c.rgb.r, c.rgb.g, c.rgb.b, c.rgb.a));
  };
  
  const handleCornerColorChange = (c) => {
    setSelectedCornerColor("#" + rgbHex(c.rgb.r, c.rgb.g, c.rgb.b, c.rgb.a));
  };
  const handleLogoChange = (e) => {
    const file = e.target.files[0];
    const reader = new FileReader();
    reader.onload = () => {
      setLogoImage(reader.result);
    };
    reader.readAsDataURL(file);
  };
  const RevertChanges = ()=>{
    setSelectedColor(fgColor);
    setSelectedCornerColor(cornerColor);
    setLogoImage(logoDefault);
  };
  const setSquare = ()=>{
    setShape('squares')
  }
  const setDots = ()=>{
    setShape('dots')
  }

  return (
    <div className="container-fluid    position-relative " style={{top: "-100px", display:"flex" }}>
      <div className="col-md-4 " >
        <div className="card shadow" style={{width: "90%"}} >
          <div className="card-header text-center pt-3 bg-white " ><h5>Restaurant QR Generator</h5></div>
            <div className="card-body d-flex flex-column align-items-center justify-content-center  row-gap-5 pb-4" style={{backgroundColor: "#f7f9fb"}}>
              <span>Select Qr Style</span>
              <div className='d-flex  column-gap-3'>
                <button className='border-0' onClick={setSquare}>
                <QRCode qrStyle='squares' size={50}/>    

                </button>
                <button className='border-0' onClick={setDots}>
                <QRCode qrStyle='dots' size={50}/>    

                </button>
              </div>
              <span>Select Qr Colors</span>
              <TwitterPicker
              color={selectedColor}
              onChange={handleColorChange}
            />
              <TwitterPicker
              color={selectedCornerColor}
              onChange={handleCornerColorChange} // Use onChange for real-time updates
            />  
              <div className='d-flex column-gap-3  align-items-center '>
              <label htmlFor="fileInput" >
                  <input type="file" id="fileInput" accept="image/*"    style={{display: 'none'}} onChange={handleLogoChange} ref={fileInputRef} />
                  <a  className="text-blue fw-bold " style={{cursor: 'pointer', textDecoration: 'none'}}>Select Image</a>             
              </label>
                <button type='button' className='btn btn-primary fs-6' onClick={RevertChanges}>Revert Changes</button>        
              </div>
            </div>
        </div>
      </div>
      <div className="col-md-4 " >
        <div className="card shadow" style={{width: "90%"}} >
          <div className="card-header text-center pt-3 bg-white " ><h5>QR Downloader</h5></div>
          <div className="card-body text-center " style={{backgroundColor: "#f7f9fb"}}>
            <MyQRCodeComponent shape={shape} color={selectedColor} cornerColor={selectedCornerColor} logoImage={logoImage}/> 
           <div className=' '> <button className='btn bg-success text-white' onClick={downloadCode}>Download QR Code</button>   </div>
          </div>
        </div>
      </div>
      
      <div className="col-md-4">
            <div className="card shadow" style={{width: "90%"}}>
                  <div className="card-header text-center pt-3 bg-white "><h5>Menu Print template</h5></div>
                        <div className="card-body" style={{backgroundColor: "#f7f9fb"}}>
                            
                        </div>
                  </div>
            </div>
      <div>
        
      </div >
      

      
    </div>
  );
}

export default App;

document.addEventListener('DOMContentLoaded', function () {
    const QR = document.querySelectorAll('.QR');
  
    QR.forEach((element) => {
      const root = ReactDOM.createRoot(element);
  
      // Render your component inside each root instance with the retrieved label
      root.render(<App/>);

      
    });
  });

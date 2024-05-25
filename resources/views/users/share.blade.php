<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Share</title>
    @include('layouts.links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    
      
   @include('layouts.sidebar')
   <div class=" ahmad  ">
    <nav class="navbar    text-white " style="    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important" >

        <div  class=" container-fluid">
                
            <div class="row w-100 ms-2">

                <h5 class="col-3  align-items-center  d-flex mb-0">Share</h5>
                <div class="col d-lg-none justify-content-start bg-primary">
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            
                <div class=" col d-lg-none d-flex justify-content-center  bg-secondary">
                    <img id="CollapsedImage" src="/images/LogoBlack_NoBG.png" width="80" alt="">
                </div>
            
                
                @include('layouts.topLeftNav')

            </div>

              
            <div class="container-fluid " style="height: 250px;"></div>

                {{-- the positioned row  --}}
        </div> 


    </nav>


    <div class="container-fluid  position-relative " style="top: -130px;">

      


        <div class="row mt-4 px-5" >
            <div class="col">
                <div class="card shadow border-0  " style="background-color: f8f9fe;">
                    <div class="card-header border-0   py-4 px-4 bg-white  gy-2 " >
                       <div class="d-flex justify-content-center align-content-center pb-3   "> 
                           <h5 style="color: rgb(139, 139, 139); font-family: SFMono-Regular;" class="text-center">Share your Menu with your Audience</h5>
                           {{-- <div class="d-flex align-items-center   column-gap-2 ">
                           <a  data-bs-toggle="collapse" href="#multiCollapseExample1"  aria-expanded="false" aria-controls="multiCollapseExample1"><span class="material-symbols-outlined">expand_more</span></a>
                           </div> --}}
                       </div>
                            
                       
                    <div class="card-body ">
                        <div class="row  g-2  ">
                            <div class="col d-flex flex-column align-items-center row-gap-4 ">
                                <div id="qr-code"></div>
                                <div><button class="btn1 btn btn-success "> Download QR code</button></div>
                            </div>
                        
                        </div>
                    </div>


                        
                    </div>

                    
                </div>
                
            </div>

        </div>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
        const qrContainer = document.getElementById('qr-code');
        const downloadBtn = document.getElementById('downloadBtn');
        new QRCode(qrContainer, {
            text: 'https://wetapit.com', 
            width: 150,
            height: 150,
        });
        downloadBtn.addEventListener('click', () => {
            let img = document.querySelector('#qr-code img');
            if (img !== null) {
                let imgAttr = img.getAttribute('src');
                downloadBtn.setAttribute('href', imgAttr);
            }
        });
    </script>
    






</div>

<style>

    body{
        background-color: #fafbfc; 
    }

    a{
        text-decoration: none;
        cursor: pointer;
    }
    label{
        color: gray;
        font-weight: bold;
    }
    .form-select{
        /* max-width: 150px !important; */
    }

    .form-check-input{
        width: 28px;
        height: 28px;
        border: none;
        background-color: white;
        border: 1px solid gray;
    }

    .form-check-input:checked{
       
        background-color: #5e72e4;
        
    }

    .form-check{
        display: flex;
        column-gap: 8px;
        align-items: center;
       
    }
    .btn1{
        background-color: rgb(79, 214, 156);
        transition: transform 0.75s;
        width: 100%;
    }
    
 



</style>
<script>
// Assuming you have included the Bootstrap datepicker library
// Initialize the datepicker
$('#e').datepicker({
    format: 'Date Form', // Specify the format you want
    autoclose: true
});
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Floor Plan</title>
    <script src="{{ mix('js/FloorPlan.js') }}"></script>

    @include('layouts.links')
    <style>
         /* .form-select{
            width: 100px !important;
        } */
    </style>
</head>

<body>
    @include("layouts.sidebar")
    <div class=" ahmad  ">
        <nav class="navbar  text-white " style="    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important" >

            <div  class=" container-fluid">
                    
                <div class="row w-100 ms-2">

                    <h5 class="col-3  align-items-center  d-flex mb-0">Floor Plan </h5>
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
            <div class="row mt-4 px-4" >
                <div class="col">
                    <div class="card p-0 shadow border-0 px-4 " style="background-color: f8f9fe;">
                            <div class="floor"></div>                    
                    </div>
                    
                </div>

            </div>


        </div>

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
       
        tr,td{
            text-align: center;
        }
        .badge{
            border-radius: 50%;
        }

        .text-bg-success{
            background-color:rgb(79, 214, 156) !important;
        }


        /* td {
           text-align: center;
        }
   */
    </style>
    <script>
   
</script>
    
</body>
</html>
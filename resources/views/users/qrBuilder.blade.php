<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="{{ mix('js/QR.js') }}"></script>
    @include('layouts.links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
   @include('layouts.sidebar')
    <div class="ahmad"  >
        <nav class="navbar d-flex  bg-white text-white " style="    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important" >

            <div  class=" container-fluid row-gap-3">
                    
                <div class="row w-100 ms-2">

                    <div class="col-3   h-100  ">QR Builder
                        
                    </div>
                    <div class="col d-lg-none justify-content-start bg-primary">
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                
                    <div class="container-fluid " style="height: 150px;"></div>

                </div>

                

                <div class="container-fluid " style="height: 100px;">
                    
                </div>


            </div>


        </nav>

        <div class="QR"></div>

        </div>
    </div>   
</body>

<style>

    .card{
        border: none;
    }
    
</style>



</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurnat</title>
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https:fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,600,0,200" />
     <link rel="stylesheet" href="https:fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,300,1,0" />
     <link rel="stylesheet" href="https:fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
     <link rel="stylesheet" href="https:fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
     <link rel="stylesheet" href="https:fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,300,0,-25" />
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <style>
         /* .form-select{
            width: 100px !important;
        } */
    </style>
</head>

<body>
    @include("layouts.sidebar")
    <div class=" ahmad  ">
        <nav class="navbar text-white " style="    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important" >

            <div  class=" container-fluid">
                
                    
                <div class="row w-100 ms-2">

                    <h5 class="col-3  align-items-center  d-flex mb-0">LIVE ORDERS</h5>
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
                           <div class="d-flex justify-content-between align-content-center pb-3   "> 
                               <h5 class="text-center m-2  ">New Delivery area</h5>
                               <div class="d-flex align-items-center   column-gap-2  ">
                                <form>
                                    <input class="btn btn-primary" type="button" value="Back" onclick="history.back()">
                                </form>
                               </div>
                           </div>   
                                
                           
                        <div class="card-body p-0 m-2 mt-3">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                   <p>Name</p> 
                                   <input type="text" class="form-control "  placeholder =" Enter delivery area name" >
                                </div>
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                   <p>Delivery cost</p>
                                   <input type="text" class="form-control " placeholder=" Enter delivery cost">
                                </div>
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                   <p>Phone</p>
                                   <input type="text" class="form-control "placeholder=" Enter Phone">
                                </div>
                            </div>
                            <div class="mt-4  ">

                            <button class="btn btn-primary">Insert</button>
                            </div>

                        </div>


                            
                        </div>

                        
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
        .raziBtn{
            height: 25px;
            width: 25px;
            border: none;
            border-radius: 4px;
            color: white;
            padding: 5px;

        }
       
        tbody .number{
            background-color: rgb(79, 214, 156); 
            border-radius:40%;
            display:flex; 
            justify-content: center;
            color: white;

        }
        tbody th{
            width: 100px;
        }
        .onumber{
            background-color:rgb(79, 214, 156) ;
            border-radius: 40%;
             max-width:30px;
             padding: 10px;
        }
        tr,th,td{
            text-align: center;
        }
        .badge{
            border-radius: 50%;
                }

                .text-bg-success{
            background-color:rgb(79, 214, 156) !important;
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
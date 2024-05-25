<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurnat</title>

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
        <nav class="navbar   text-white " style="    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important" >

            <div  class=" container-fluid">
                    
                <div class="row w-100 ms-2">

                    <h5 class="col-3  align-items-center  d-flex mb-0">Delivery areas</h5>
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
                    <div class="card p-0 shadow border-0  " style="background-color: f8f9fe;">
                        <div class="card-header p-0 border-0 pt-4 py-1  bg-white   " >  
                           <div class="row d-flex  pb-3  justify-content-center   "> 
                            <div class="col-sm-4 col-12 "><h5 class="text-start ms-4 ">Areas management</h5></div> 
                            <div class="col-sm-8 col-12">
                                <div class="d-flex align-items-center justify-content-end column-gap-2  me-4 ">
                                 <a href="/users/delivery/addDelArea" class="btn btn-primary "> Add new delivery area</a>
                                 
                                </div>

                                </div>  
                           </div>   
                        </div>    
                           
                        <div class="card-body p-0">
                            <div class="table-responsive">
                            <table class="table border-top">
                                <thead>
                                    <tr >
                                        <th style="background-color: #F6F9FC; color: #8898AA; text-align: center;" scope="col">NAME</th>
                                        <th style="background-color: #F6F9FC; color: #8898AA; text-align: center;">Delivery Cost</th>
                                        <th style="background-color: #F6F9FC; color: #8898AA;" scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr>
                                        <th scope="row" class="text-center  text-secondary">Indoor</th>
                                        <td class="text-center  text-secondary">10$</td>
                                        <td ><button class="btn btn-success mb-2 me-2"><div class="d-flex align-items-center"><span class="material-symbols-outlined">psychiatry</span>Floor Plan</div></button>  <a href="/users/tables/editArea"  class="btn btn-primary mb-2 me-2"><div class="d-flex align-items-center"><span class="material-symbols-outlined">border_color</span>Edit</div></a>  <button class="btn btn-danger mb-2"><div class="d-flex align-items-center"><span class="material-symbols-outlined">delete</span>Delete</div></button></td>
                                    </tr>
                                    <tr >
                                        <th scope="row" class="text-center  text-secondary">ahmad</th>
                                        <td class="text-center  text-secondary">20$</td>
                                        <td ><button class="btn btn-success mb-2 me-2"><div class="d-flex align-items-center"><span class="material-symbols-outlined">psychiatry</span>Floor Plan</div></button>  <a href="/users/tables/editArea"  class="btn btn-primary mb-2 me-2"><div class="d-flex align-items-center"><span class="material-symbols-outlined">border_color</span>Edit</div></a>  <button class="btn btn-danger mb-2"><div class="d-flex align-items-center"><span class="material-symbols-outlined">delete</span>Delete</div></button></td>
                                    </tr>
                                </tbody>
                            </table>
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
    // Assuming you have included the Bootstrap datepicker library
    // Initialize the datepicker
    $('#e').datepicker({
        format: 'Date Form', // Specify the format you want
        autoclose: true
    });
</script>
    
</body>
</html>
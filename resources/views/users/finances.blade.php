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

    @include('layouts.sidebar')

    

    <div class=" ahmad  ">
        <nav class="navbar d-flex  bg-white text-white " style="    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;" >

            <div  class=" container-fluid row-gap-3">
                    
                <div class="row w-100 ms-1">

                    <div class="col-3   h-100  ">Finance</div>
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

                <div class="container-fluid " style="height: 200px;"></div>

            </div>
              


        </nav>


        <div class="container-fluid  position-relative  " style="top: -150px;">
                        <div class="container-fluid mt--9  " >
                            <div class="row mb-4 mt--3  px-4">
                                <div class="col-md-6 col-sm-12 col-lg-5 ">
                                    <div class="card  shadow">
                                        <div class="card-header border-0 bg-white " >
                                            <div class="row align-items-center">
                                                <div class="col-8 py-3">
                                                    <h3 class="  custom_font">Fee information</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-4  flex-column  justify-content-start  border-0" > 
                                           <span class=""> Your current static fee on each order is $0.00 <br class=" ms-2"> Your current percentage fee on each order is 0% on the order value</span>
                                         
                                        </div>
                                        <div class="card-footer py-4 ">
                                          <span class=" ms-2 ">
                                             <b>Fees :0% + $0.00</b>
                                          </span>
                                        </div>
                                    </div>
                                </div>  
                            </div>  
                            <div class="row  px-4 row-gap-4 ">
                                <div class="col-3">
                                 <div class="card  shadow-sm  ">
                                  <div class="card-body  m-1">
                                  <span style="color:#adb5bd; font-size: small; "> <b>ORDERS </b><br></span>
                                   <b>0</b>  
                                  </div>
                                 </div>
                                </div>
                                <div class="col-3">
                                 <div class="card shadow-sm   ">
                                  <div class="card-body m-1">
                                  <span style="color:#adb5bd; font-size: small; "> <b>TOTAL </b><br></span>
                                   <b>$0.00</b>  
                                  </div>
                                 </div>
                                </div>
                                <div class="col-3">
                                 <div class="card shadow-sm   ">
                                  <div class="card-body m-1">
                                  <span style="color:#adb5bd; font-size: small; "> <b>PLATFORM FEE </b><br></span>
                                   <b>$0.00</b>  
                                  </div>
                                 </div>
                                </div>
                                <div class="col-3">
                                    <div class="card shadow-sm  ">
                                    <div class="card-body m-1">
                                  <span style="color:#adb5bd; font-size: small; "> <b>NET INC.VAT </b><br></span>
                                   <b>$0.00</b>  
                                  </div>
                                 </div>
                                </div>  
                                <div class="col-3">
                                 <div class="card shadow-sm  ">
                                  <div class="card-body  m-1">
                                  <span style="color:#adb5bd; font-size: small; "> <b>VAT </b><br></span>
                                   <b>$0.00</b>  
                                  </div>
                                 </div>
                                </div>
                                <div class="col-3">
                                 <div class="card shadow-sm  ">
                                  <div class="card-body m-1">
                                  <span style="color:#adb5bd; font-size: small; "> <b>NET </b><br></span>
                                   <b>$0.00</b>  
                                  </div>
                                 </div>
                                </div>
                                <div class="col-3">
                                 <div class="card shadow-sm ">
                                  <div class="card-body m-1">
                                  <span style="color:#adb5bd; font-size: small; "> <b>DELIEVERS </b><br></span>
                                   <b>0</b>  
                                  </div>
                                 </div>
                                </div>
                                <div class="col-3">
                                 <div class="card shadow-sm  ">
                                  <div class="card-body m-1">
                                  <span style="color:#adb5bd; font-size: small; "> <b>DELIVERY COST </b><br></span>
                                   <b>$0.00</b>  
                                  </div>
                                 </div>
                                </div>    
                            </div>
                            <div class="row mt-4 px-4" >
                                <div class="col">
                                    <div class="card shadow border-0  " style="background-color: f8f9fe;">
                                        <div class="card-header border-0   py-4 px-4 bg-white  gy-2 " >
                                        <div class="d-flex justify-content-between align-content-center pb-3   "> 
                                            <h5 class="text-center">Orders</h5>
                                            <div class="d-flex align-items-center   column-gap-2 ">
                                            <a  data-bs-toggle="collapse" href="#multiCollapseExample1"  aria-expanded="false" aria-controls="multiCollapseExample1"><span class="material-symbols-outlined">expand_more</span></a>
                                            </div>
                                        </div>
                                        <div class="row collapse show multi-collapse" id="multiCollapseExample1">

                                            <div class="col-lg-3 ">
                                                <span>Date From</span>
                                                    <div class="input-group flex-nowrap mt-2">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="addon-wrapping">
                                                                <span class="material-symbols-outlined">calendar_month</span>
                                                            </span>
                                                            {{-- <div class="datePicker" data-label="{{ "Date From" }}"></div> --}}
                                                            <input type="date" class="form-control datepicker" placeholder="Select a date" aria-label="Select a date" aria-describedby="addon-wrapping" id="e" >
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="col-lg-3">
                                                    <span>Date To</span>
                                                    <div class="input-group flex-nowrap mt-2">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="addon-wrapping">
                                                                <span class="material-symbols-outlined">calendar_month</span>
                                                            </span>
                                                            {{-- <div class="datePicker" data-label="{{ "Date To" }}"></div> --}}
                                                            <input type="date" class="form-control datepicker" placeholder="Select a date" aria-label="Select a date" aria-describedby="addon-wrapping" id="e" >
                                                        </div>
                                                    </div>
                                            </div> 

                                            <div class="col-lg-3">
                                                    <span>Last Status</span>
                                                    
                                                    <select class="form-select mt-2"  aria-label="Default select example">
                                                            <option selected>Select Last Status</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    
                                                    
                                            </div> 

                                            <div class="col-lg-3 ">
                                                    <span>Payment Status</span>
                                                    
                                                        <select class="form-select mt-2"  aria-label="Default select example">
                                                            <option selected>Select Payment status</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    
                                            </div> 

                                            </div>  
                                            <div class="row mt-3 collapse show multi-collapse" id="multiCollapseExample1" style="row-gap: 4px;">
                                                <div class="col-lg-4 ">
                                                    <button class="w-100 btn text-white" style="background-color:  #fb6340;;"> Clear Filters</button>
                                                </div>

                                                <div class="col-lg-4 ">
                                                    <button class="w-100 btn text-white " style=" background-color: rgb(79, 214, 156);" >Download Report </button>
                                                </div>

                                                <div class="col-lg-4 ">
                                                    <button class="w-100 btn text-white "style="background-color: #1171ef;"> Filter</button>
                                                </div>
                                            </div>

                                        </div>    
                                                
                                        
                                        <div class="card-body  p-0 ">
                                            <div class="table-responsive  " style="width: 100% !important;">
                                                <table class="table border-top">
                                                    <thead>
                                                        <tr style="height: 30px;">
                                                            <th style="background-color: #f7fafc" scope="col">ID</th>
                                                            <th style="background-color: #f7fafc" scope="col">CREATED</th>
                                                            <th style="background-color: #f7fafc" scope="col">TABLE/METHOD</th>
                                                            <th style="background-color: #f7fafc" scope="col">ITEMS</th>
                                                            <th style="background-color: #f7fafc" scope="col">PRICE</th>
                                                            <th style="background-color: #f7fafc" scope="col">LAST STATUS</th>
                                                            <th style="background-color: #f7fafc" scope="col">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gap-2 ">
                                                        <tr>
                                                            <th class="align-middle " scope="row "><span class="badge p-2 text-bg-success ">#231</span></th>
                                                            <td class="align-middle "> Friday, November 3, 2023 8:27 PM</td>
                                                            <td class="align-middle "> Dine in</td>
                                                            <td class="align-middle "> 1</td>
                                                            <td class="align-middle "> Mark</td>
                                                            <td class=" align-middle ">
                                                                <span class="badge rounded-pill bg-red text-red  px-2    "  >Prepared</span>
                                                            </td>
                                                            <td class="align-middle"><button class=" btn btn-success btn1 ">Prepared</button></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="align-middle " scope="row "><span class="badge p-2 text-bg-success ">#232</span></th>
                                                            <td class="align-middle "> Friday, November 3, 2023 8:27 PM</td>
                                                            <td class="align-middle "> Dine in</td>
                                                            <td class="align-middle "> 1</td>
                                                            <td class="align-middle "> Mark</td>
                                                            <td class=" align-middle ">
                                                                <span class="badge rounded-pill bg-primary text-primary ">Accepted</span>
                                                            </td>
                                                            <td class="align-middle"><button type="button" class=" btn btn-danger btn1">Reject</button></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                        {{-- </div> --}}


                                            
                                        </div>

                                        
                                    </div>
                                    
                                </div>

                            </div>
                           
                           

                                    
                                    

                        </div>

                     
        </div>




     



        
    </div> 
    <style>
        .custom_font{
            --font-family-sans-serif: Open Sans, sans-serif;
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
            font-size: 10 px;
        }
    </style> 
    
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
            width: 70%;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="{{ mix('js/LineStatistics.js') }}"></script>
    <script src="{{ mix('js/BarStatistics.js') }}"></script>
    @include('layouts.links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    
</head>
<body>
    
      
   @include('layouts.sidebar')


    <div class=" ahmad  ">
        <nav class="navbar d-flex  bg-white text-white " style="    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important" >

            <div  class=" container-fluid row-gap-3">
                    
                <div class="row w-100 ms-1">

                    <div class="col-3   h-100  ">Dashboard</div>
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

                <div  class="row w-100 ms-1 mt-5 gy-3 " >

                    <div class="  col-lg-6 col-xl-3 col-12    " >
                        <div class="card">
                            <div class="card-body row ">
                                <div class="col-8">
                                        <div class="card-title ">
                                            Orders (30 Days)
                                        </div>
                                        <div class="card-text">
                                        5
                                        </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <div class="   rounded-circle text-center  `d-flex align-items-center" style="width: 60px; height: 60px;">
                                        <span class="material-symbols-outlined bg-danger rounded-circle p-2 text-white " style="font-size: 38px;">shopping_basket</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="  col-lg-6 col-xl-3 col-12    " >
                        <div class="card">
                            <div class="card-body row ">
                                <div class="col-8">
                                        <div class="card-title" style="font-size: 15px;">
                                        Sales Volume 
                                        </div>
                                        <div class="card-text">
                                        12
                                        </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <div class="   rounded-circle text-center  d-flex align-items-center" style="width: 60px; height: 60px;">
                                        <span class="material-symbols-outlined bg-success rounded-circle p-2 text-white " style="font-size: 38px;">trending_up</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="  col-lg-6 col-xl-3 col-12    " >
                        <div class="card">
                            <div class="card-body row ">
                                <div class="col-8">
                                        <div class="card-title">
                                        Expenses 
                                        </div>
                                        <div class="card-text">
                                        36
                                        </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <div class="   rounded-circle text-center  d-flex align-items-center" style="width: 60px; height: 60px;">
                                        <span class="material-symbols-outlined bg-warning rounded-circle p-2 text-white " style="font-size: 38px;">trending_down</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="  col-lg-6 col-xl-3 col-12    " >
                        <div class="card">
                            <div class="card-body row ">
                                <div class="col-8">
                                        <div class="card-title">
                                        Views
                                        </div>
                                        <div class="card-text">
                                        125
                                        </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <div class="   rounded-circle text-center  d-flex align-items-center" style="width: 60px; height: 60px;">
                                        <span class="material-symbols-outlined bg-info rounded-circle p-2 text-white " style="font-size: 38px;">groups</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="container-fluid " style="height: 100px;"></div>


            </div>


        </nav>



        <div class="container-fluid    position-relative " style="top: -100px" >

                {{-- the main analytics --}}
                

                    {{--   --}}
                <div class="row w-100 gy-4  ms-1  mt-3">
                    <div class="col-lg-8 col-12  " >
                        <div class="card pb-2 shadow "  style="background-color: rgb(2, 2, 94);">
                            <div class="card-header  p-3 ps-4 ">
                               <div class="card-title text-white text-opacity-75 pb-1">Overview</div> 
                                <h5 class="card-text text-white mt-2">Sales Value</h5>
                            </div>
                            <div class="card-footer p-3 ps-4 py-4 border-0 " >
                                {{-- <div class="card-text text-white text-opacity-75">No sales right now!</div> --}}
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card pb-2 shadow ">
                            <div class="card-header p-3 ps-4 bg-white">
                                <div class="card-title text-secondary pb-1" >Performance</div>
                                <h5 class="card-text">Total Orders</h5>
                            </div>
                            <div class="card-footer text-center p-3 ps-4 py-4 bg-white border-0">
                                {{-- <div class="card-text">No orders right now!</div> --}}
                                <div class="bar" data-label = "{{300}}"></div>
                            </div>
                        </div>
                    </div>
                </div>


            <div class="row  w-100 ms-1 mt-5">
                <div class="col-6">
                    <div class="card shadow ">
                          <div class="card-header p-3">
                            <div class="card-title text-secondary">
                             Expenses (30 Days)
                            </div>
                        <div>
                            <p><strong>By Category</strong></p>
                        </div>
                      </div>
                      <div class="card-footer text-secondary p-4 border-0 ">
                          {{-- <p>No expenses right now!</p> --}}
                          <div class="bar" data-label = "{{500}}"></div>
                      </div>
                    </div>
                </div>
                <div class="col-6">
                <div class="card shadow ">
                          <div class="card-header p-3">
                            <div class="card-title text-secondary">
                             Expenses (30 Days)
                            </div>
                        <div>
                            <p><strong>By Vendor</strong></p>
                        </div>
                      </div>
                      <div class="card-footer text-secondary p-4 border-0 ">
                          {{-- <p>No expenses right now!</p> --}}
                          <div class="bar" data-label = "{{500}}"></div>
                      </div>
                    </div>
                </div>
            </div>



            <div class="row ms-1 mt-5 w-100">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row ">
                                <div class="col-8">
                                    <h3 class="mb-0">Your current plan</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-transparent m-2">
                            <p>You are currently using the Yearly Mega plan<p>
                            <div class="alert alert-success text-white fw-bold " role="alert" style="background-color: rgb(79,214,156);">
                                You can receive unlimited number of orders
                            </div>
                            <div class="alert alert-success text-white fw-bold " role="alert" style="background-color: rgb(79,214,156);">
                                    You can add unlimited number of items
                            </div>
                            <p>Status:  <strong>Set by admin</strong><p>
                        </div>
                        <div class="card-footer bg-white ">
                            <button class="btn btn-success p-2 px-3 m-2 mt-3 border-0 " style="background-color: rgb(79,214,156);">Go to plans</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>



       


    </div>


 

    
</body>

<style>

    .card{
        border: none;
    }
    
</style>



</html>
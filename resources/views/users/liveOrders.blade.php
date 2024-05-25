<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Orders</title>
    @include('layouts.links')
</head>
<body>

    @include('layouts.sidebar')

    <div class=" ahmad  ">
        <nav class="navbar d-flex  bg-white  text-white " style="    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;" >

            <div  class=" container-fluid row-gap-3">
                    
                <div class="row w-100 ms-2">

                    <div class="col-3   h-100  ">LIVE ORDERS</div>
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


        
        {{-- the positioned row  --}}
        <div class="container-fluid  position-relative  " style="top: -150px;">
            <div class="row w-100 ms-1">

                <h1 class="text-white  ">Live Orders </h1>
            </div>
            <div class="row w-100 gy-3   position-relative  ms-1  " style="top: 30px">
                <div class="col-xl-4 col-12">
                    <div class="card ">
                        <div class="card-header  p-3 py-4  bg-white ">
                            <h5>New Orders</h5>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="card ">
                        <div class="card-header  p-3 py-4  bg-white ">
                            <h5>Accepted</h5>
                        </div>
                        <div class="card-body">
        
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12 ">
                    <div class="card  ">
                        <div class="card-header border-0   pb-1 p-3 py-4  bg-white ">
                            <h5> Done</h5>
                        </div>
                        <div class="card-body ">
                                        <!-- orders  -->
                                        <!-- from here -->
                                <div class="row  py-2 border-top px-2 ">
                                    <div class="col-sm-1 col-xl-2  d-flex align-items-center col-2">
                                        <div class="bg-danger rounded-circle " style=" height:10px; width:10px;"></div>
                                    </div>
                                    <div class="col-sm-8 col-6 col-xl-6">
                                        <span style="display: block;"class="text-secondary m-2 ">Rejected by Restaurant</span>
                                        <span style="display: block;" class="text-secondary m-2">Friday,November3,2023 8:27 PM</span>
                                        <span style="display: block; margin: 2px;" ><STRONG>#640 Dounts House Demo</STRONG></span>
                                        <span style="display: block;" class="text-secondary m-2">Indoor-razi</span>
                                        <span style="display: block;" class="text-secondary m-2">$20.00</span>   
                                    </div>
                                    <div class="col-sm-2 d-flex align-items-center col-2 col-xl-4">
                                        <a href="/users/liveorders/details" class="btn text-white " style="background: #825ee4;">Details</a>
                                    </div>
                                </div>
                                        <!-- The next order -->
                                <div class="row  py-2 border-top px-2">
                                    <div class="col-sm-1  col-xl-2 d-flex align-items-center col-2">
                                        <div class="bg-danger rounded-circle " style=" height:10px; width:10px;"></div>
                                    </div>
                                    <div class="col-sm-8 col-xl-6 col-6">
                                        <span style="display: block;"class="text-secondary m-2 ">Rejected by Restaurant</span>
                                        <span style="display: block;" class="text-secondary m-2">Friday,November3,2023 8:27 PM</span>
                                        <span style="display: block; margin: 2px;" ><STRONG>#640 Dounts House Demo</STRONG></span>
                                        <span style="display: block;" class="text-secondary m-2">Indoor-razi</span>
                                        <span style="display: block;" class="text-secondary m-2">$20.00</span>   
                                    </div>
                                    <div class="col-sm-2  d-flex align-items-center col-2 col-xl-4">
                                        <a href="/users/liveorders/details" class="btn text-white " style="background: #825ee4;">Details</a>
                                    </div>
                                </div>
        
        
                                
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>




     



    </div>
    
</body>
</html>
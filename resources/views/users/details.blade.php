<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The king Razi </title>
    @include('layouts.links')
</head>
<body>
@include('layouts.sidebar');
<div class=" ahmad  ">
        <nav class="navbar d-flex  bg-white  text-white " style="    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important " >

            <div  class=" container-fluid row-gap-3">
                    
                <div class="row w-100  d-flex algin-items-center">

                    <div class="col-3   ">LIVE ORDERS</div>
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

                  
                <div class="container-fluid d-flex align-items-center justify-content-start ms-1 mt-4 mb-0 ">
                   <h1>Live Orders </h1>
                </div>

                    {{-- the positioned row  --}}
                <div class="row w-100 gy-3 position-relative ms-1  " style="top: 40px">
                      {{-- The 3 Cards--}}
                    <div class="col-xl-8 col-12">
                        <div class="card ">
                            <div class="card-header   p-3 py-4  bg-white  d-flex align-items-center justify-content-between ms-1 ">
                                <div>
                                    <h5 class="mb-0">#641-Friday,November 3,2023 8:47PM </h5>
                                </div>
                                <div >
                                <button class="btn text-white " style="background: #825ee4;"> <span> <</span>Back </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid  border-bottom p-3  ">
                                     <h6 class=" text-secondary pb-3 ">RESTAURANT INFORMATION</h6>
                                     <div class="container-fluid py-2">
                                     <span style=" display: block;"> Dounts House Demo</span>
                                     <span style=" display: block;">California</span>
                                     <span style=" display: block;"> +110000000000</span>
                                     <span style=" display: block;"> house,dounts@house.com</span>
                                     </div>
                                </div>
                                <div class="container-fluid  border-bottom p-3 ">
                                     <h6 class=" text-secondary pb-3 ">TABLE INFORMATION</h6>
                                     <div class="container-fluid py-2">
                                     <span style=" display: block;">Table:razi</span>
                                     <span style=" display: block;">Area:Indoor</span>
                                     </div>
                                </div>
                                <div class="container-fluid  border-bottom p-3 ">
                                     <h6 class=" text-secondary pb-3 ">ORDER</h6>
                                     <div class="container-fluid py-2">
                                        <li> 1×ORANGE JUSIE -$20.00=($20.00)<span class="material-symbols-outlined">border_color</span></li>
                                     </div>
                                     <div class="container-fluid pt-5">
                                        <p>Comment:</p>
                                        <div class=" mb-3 ">
                                            <span style="display:block">NET:$20.00</span>
                                            <span style="display:block">VAT:$0.00</span>
                                            <span style="display:block">Sub Total:$20.00</span>
                                        </div>
                                     </div>
                                </div>
                                <div class=" border-bottom p-3 ">
                                     <div class=" py-3">
                                      <h5>TOTAL:$20.00</h5>
                                     </div>
                                </div>
                                <div class="container-fluid  border-bottom p-3 ">
                                     <div class=" py-2">
                                     <span style=" display: block;">Payment method:CDD</span>
                                     <span style=" display: block;">Payment status :Unpaid</span>
                                     </div>
                                </div>
                                <div class="  p-3 ">
                                     <div class=" py-3">
                                      <h6>Dine method :Dine in</h6>
                                     </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="container-fluid p-3 ">
                                        <h6 class=" text-secondary pb-3 ">ACTIONS</h6>
                                        <button class="btn text-white " style="background: #825ee4;"> Prepared </button>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- Aceppted Card -->
                    <div class="col-xl-4 col-12">
                        <div class="card ">
                            <div class="card-header  p-3 py-4  bg-white d-flex justify-content-center align-items-center  flex-column border-bottom-0  ">
                                 <img width="320" src="/images/person2.png" alt="">
                                 <div class="w-100">
                                     <button class="btn text-white  bg-success " style="max-width: 65px;" >Email</button>
                                 </div>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center border-0  ">
                                <div class="container-fluid py-2 mt-3  d-flex flex-column align-items-center  ">
                                        <strong class="d-block mb-2  ">House</strong>
                                        <span class="d-block">dounts@house.com</span>
                                        <span >+20200000000000000</span>
                                        <p class="mt-2" style="display: block "> 18 May ,2023 08:18 PM</p>
                                </div>
                                <div class="container-fluid">
                                   
                                </div>
                                <div class="container-fluid d-flex flex-">
                                </div>
                            </div>
                        </div>
                    </div>          <!-- Done card -->

                </div>


        </nav>



        



     



    </div>
    
</body>
</html>
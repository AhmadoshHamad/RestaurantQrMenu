<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurnat</title>
    <script src="{{ mix('js/TimePicker.js') }}"></script>
    @include('layouts.links')
    <style>
         .form-select{
            width: 100px !important;
        }
    </style>
</head>
<body>

    @include('layouts.sidebar')

    <div class=" ahmad  ">
        <nav class="navbar  text-white " style="    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important" >

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


        <div class="container-fluid  position-relative " style="top: -140px;">

            <div class="row gy-2 px-5">

                <a class="col-md-4 ">
                    <div class="card  " style="background-color: #0057ba" >
                        <div class="card-body d-flex  align-items-center justify-content-center text-white column-gap-1  ">
                            <span class="material-symbols-outlined " style="font-size: 28px;">badge</span>
                            <span>Restaurant mangement</span>
                        </div>
                    </div>
                </a>

                <a class="col-md-4   ">
                    <div class="card">
                        <div class="card-body d-flex  align-items-center justify-content-center  column-gap-1  ">
                            <span class="material-symbols-outlined card-text " style="font-size: 28px;">alarm_on</span>
                            <span class="card-text ">Working hours</span>
                        </div>
                    </div>
                </a>

                <a class="col-md-4   ">
                    <div class="card">
                        <div class="card-body d-flex  align-items-center justify-content-center  column-gap-1  ">
                            <span class="material-symbols-outlined card-text " style="font-size: 28px;">tune</span>
                            <span class="card-text ">Custom Css</span>
                        </div>
                    </div>
                </a>

            </div>


            <div class="row mt-4 px-5" >
                <div class="col">
                    <div class="card shadow border-0  " style="background-color: f8f9fe;">
                        <div class="card-header d-flex justify-content-between align-content-center border-0 bg-white  py-3 px-4">
                            <h5 class="text-center">Working hours</h5>
                            <div class="d-flex align-items-center   column-gap-2 ">
                                <button class="btn text-white" style="background-color: #4059e8;" >add new shift</button>
                            </div>
                        </div>

                        <div class="card-body " style="background-color: #fafafa;">
                            <h5 class="card-title mb-4">Restaurant Info</h5>
                            <div class="row">
                                <a class="col-md-6 " >
                                    <div class="card shadow p-2 rounded text-white text-center " style="background-color: #0057ba;">
                                        <div class="card-title">Shift 1</div>
                                    </div>
                                </a>
                                <a class="col-md-6  ">
                                    <div class="card shadow p-2 rounded text-primary  text-center ">
                                        <div class="card-title">Shift 1</div>
                                    </div>
                                </a>
                        </div>


                        

                        <div aria-label="Week days" class="row mt-4 ms-1 row-gap-3 ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">  Sunday  </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  fw-bold " style="font-size: 25px; ">-</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">  Monday  </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  fw-bold " style="font-size: 25px; ">-</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">  Tuesday  </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  fw-bold " style="font-size: 25px; ">-</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">  Wednesday  </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  fw-bold " style="font-size: 25px; ">-</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">  Thursday  </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  fw-bold " style="font-size: 25px; ">-</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">  Friday  </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  fw-bold " style="font-size: 25px; ">-</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">  Saturday  </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  fw-bold " style="font-size: 25px; ">-</div>
                                            <div class="col-4 d-flex align-items-center  justify-content-center  "><div class="time"></div>
</div>
                                        </div>
                                    </div>
                                </div>

    
                        </div>

                        

                    

                            <div class="row w-100 my-4 mt-5">
                                <div class="col d-flex justify-content-center column-gap-2 ">
                                    <button class="btn p-2 px-4 text-white " style="background-color: rgb(255, 52, 1);">Delete</button>
                                    <button class="btn p-2 px-4 text-white " style="background-color: rgb(79, 214, 156);" >Save</button>
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
        .form-select{
            max-width: 150px !important;
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
        .btn{
            
            transition: transform 0.75s;
        }

        .btn:hover{
            /* background-color: rgb(79, 214, 156); */
            transform: scale(1.1);
            /* box-shadow: 2px 2px 2px rgba(79, 214, 156,0.8); */
        }

        .card-text {
            color: #4059e8;
        }
       

    </style>
    
    
</body>
</html>
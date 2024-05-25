<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Restaurnat</title>
    @include('layouts.links')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.20/build/js/intlTelInput.js"></script>
    <style>
         .form-select{
            width: 100px !important;
        }
    </style>
</head>
<body>

    @include('layouts.sidebar')

    
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
              

        <div class="container-fluid  position-relative px-5" style="top: -170px;">
            <div class="alert  position-relative container-fluid bg-success " role="alert" >
                <div class="d-flex justify-content-between align-items-center  ">
                    <span class="text-white ps-2">Restaurant successfully updated </span>
                    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close" ></button>
                </div>
            </div>
            

            <div class="row gy-2 ">

                <a class="col-md-4 ">
                    <div class="card  " style="background-color: #0057ba" >
                        <div class="card-body d-flex  align-items-center justify-content-center text-white column-gap-1  ">
                            <span class="material-symbols-outlined " style="font-size: 28px;">badge</span>
                            <span style="">Restaurant mangement</span>
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
           
            


            <div class="row mt-4 " >
                <div class="col">
                    <div class="card shadow border-0  " style="background-color: f8f9fe;">
                        <div class="card-header d-flex justify-content-between align-items-center border-0 bg-white  py-3 px-4 mb-1 ">
                            <h5 class="textfgvc-center mt-3 " style=" font-size: larger;">Restaurant Mangement</h5>
                            <div class="d-flex align-items-center   column-gap-2 ">
                                <button class="btn text-white" >View it</button>
                                <button class="btn text-white" >Login as</button>
                            </div>
                        </div>

                        <div class="card-body " style="background-color: #fafafa;">
                            <div class="row">
                                <div class="col-6">
                                <h5 class="card-title mb-4 ms-2  " style="font-size:small; color:grey;">RESTAURANT INFORMATION</h5>
                                </div>
                                <div class="col-6">
                                <h5 class="card-title mt-2 " style="font-size:small; color:grey;">ORDERS</h5>
                                </div>
                            </div>
                            <div class="row ms-3">
                                <div class="col-lg-6 d-flex flex-column row-gap-4  ">
                                    <div>
                                        <label class="form-label" for="">Restaurant Name</label>
                                        <input class="form-control" type="text" name="" id="" placeholder=" Dounts House Demo">
                                    </div>
                                    <div>
                                        <label class="form-label" for="">Restaurant description</label>
                                        <input class="form-control" type="text" name="" id="" placeholder=" Dounts House Demo">
                                    </div>
                                    <div>
                                        <label class="form-label" for="">Restaurant address</label>
                                        <input class="form-control" type="text" name="" id="" placeholder="California">
                                    </div>
                                    <div class="d-flex flex-column ">
                                        <label class="form-label">Restaurant phone</label>
                                        <input   type="tel" class="phone form-control ">
                                       
                                    </div>
                                </div>


                                <div class="col-lg-6 ">
                                  
                                    <div class="">
                                    <label class="form-label" for="">Minimum order</label>
                                    <input class="form-control" type="text" name="" id="" placeholder="0">
                                    <p style="font-size:small; color:grey;" ><b>Enter Minimum order value</b></p>
                                    </div>
                                    <div>
                                    <label class="form-label" for="">Average order prepare time in minutes</label>
                                    <div class="input-group " >
                                            <select class="form-select  " style="max-width: 250px;"   aria-label="Default select example">
                                                <option selected>10</option>
                                                <option value="1">10</option>
                                                <option value="2">20</option>
                                               <option value="3">30</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label" for="">Time slots separated in minutes</label>
                                        <div class="input-group " >
                                            <select class="form-select  " style="max-width: 250px;"   aria-label="Default select example">
                                                <option selected>10</option>
                                                <option value="1">10</option>
                                                <option value="2">20</option>
                                                <option value="3">30</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="card-title " Style="font-size:small; color:grey;">LOCALISATION</h5>
                                        <div class="mt-4">
                                            <label class="form-label" for="">Default language</label>
                                            <div class="input-group " >
                                                <select class="form-select  " style="max-width: 250px;"   aria-label="Default select example">
                                                    <option selected>Select Default Language</option>
                                                    <option value="1">10</option>
                                                    <option value="2">20</option>
                                                    <option value="3">30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                    <h5 class="card-title " Style="font-size:small; color:grey;">LOCALISATION</h5> 
                                        <div class="mt-4">   
                                            <label class="form-label" for="">Currency</label>
                                            <div class="input-group " >
                                                <select class="form-select  "    aria-label="Default select example">
                                                    <option selected>US DOLLAR-$=USD</option>
                                                    <option value="1">10</option>
                                                    <option value="2">20</option>
                                                    <option value="3">30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Money Conversion
                                        </label>
                                    </div>
                                    <span>Some currencies need this field to be unselected. By default it should be selected </span>
                                </div>


                               


                                
                            </div>


                            <div class="row mt-4 ms-1">
                                <div class="col-lg-6 d-flex flex-column row-gap-3 ">

                                    <div class="form-check">
                                        <input class="form-check-input  " type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Pickup
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Delivery
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                         Free Delivery
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Disable ordering
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Disable Call Waiter
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Disable Continous Orders
                                        </label>
                                      </div>

                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked >
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Dine In
                                        </label>
                                      </div>

                                </div>
                            </div>

                            <div class="row px-3">
                                <div class="col-lg-6  mt-4">
                                    <div class="d-flex flex-column row-gap-3 align-items-center  ">

                                        <label for="">Restaurant logo</label>
                                            <span>Recommended 500 * 500</span>
                                            <img id="imagePreview" height="150px" width="150px" class="border" style="border-radius: 5px;" src="/images/ARA.jpg" alt="">
                                            <label for="fileInput" style="position: relative;    z-index: 100;">
                                            <input type="file" id="fileInput" style="display: none;" value="upload image">
                                            <a  class="text-blue" >Select Image</a>

                                        </label>

                                    </div>
                                </div>

                                
                                <div class="col-lg-6  mt-4 ">
                                    <div class="d-flex flex-column row-gap-3 align-items-center  ">

                                        <label for="">Cover Image </label>
                                            <span>Recommended 500 * 500</span>
                                            <img id="imagePreview" height="150px" width="150px" class="border" style="border-radius: 5px;" src="/images/ARA.jpg" alt="">
                                            <label for="fileInput" style="position: relative;    z-index: 100;">
                                            <input type="file" id="fileInput" style="display: none;" value="upload image">
                                            <a  class="text-blue" >Select Image</a>

                                        </label>

                                    </div>
                                </div>
                            </div>

                            <div class="row  ">
                                <div class="col-lg-6 d-flex justify-content-center mt-3"><div class="colors"></div></div>
                                <div class="col-lg-6"><div class="colors"></div></div>
                            </div>

                            <div class="row w-100 my-4 ">
                                <div class="col d-flex justify-content-center">
                                    <button class="btn p-2 px-4 text-white " >Save</button>
                                </div>
                            </div>

                            <div class="card-footer bg-white mt-3 pb-5">
    
                                <h5 class="card-title">Owner Information</h5>
                                <div class="row mt-3 px-4">
                                    <label class="form-label ">Owner Info</label>
                                    <input type="text" value="ahmadosh" class="form-control" disabled  >
                                </div>
    
                                <div class="row mt-3 px-4">
                                    <label class="form-label">Owner email</label>
                                    <input type="text" value="1212621@student.birzeit.edu" class="form-control" disabled  >
                                </div>
    
                                <div class="row mt-3 px-3 ">
                                    <label class="form-label">Owner phone</label>
                                    <div class=" input-group">
                                        <select class="form-select" aria-label="country intro" style="width: 100px !important;">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                        <input type="text" value="059546741" class="form-control" disabled  >
                                    </div>
                                </div>
    
                            </div>
                        </div>

                        
                    </div>
                    
                </div>

            </div>


        </div>



        



    


    </div>

    <style>
          .btn-close {
            color: #fafbfc;
        }

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
        .form-select1{
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
            background-color: rgb(79, 214, 156);
            transition: transform 0.6s;
        }

        .btn:hover{
            background-color: rgb(79, 214, 156);
            transform: scale(1.15);
            /* box-shadow: 2px 2px 2px rgba(79, 214, 156,0.8); */
        }

        .card-text {
            color: #4059e8;
        }
       

    </style>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

        <script>
            document.write('<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.20/build/css/intlTelInput.css">');
            
            var input = document.querySelector(".phone");
            var iti = window.intlTelInput(input, {
            
              showSelectedDialCode: true,
              utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.20/build/js/utils.js",
            });
            
            // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
            window.iti = iti;
        </script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,700,0,200" />
    <title>Menu</title>
    <link rel="stylesheet" href="https://fontawesome.com/icons/pen-to-square?f=classic&s=solid">
    @include('layouts.links')
</head>
<body>

    @include('layouts.sidebar')

    <div class=" ahmad  ">
        <nav class="navbar d-flex  bg-white  text-white " style="    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;" >

            <div  class=" container-fluid row-gap-3">
                    
                <div class="row w-100 ms-3">

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

                <div class="container-fluid " style="height: 220px;"></div>

            </div>
              


        </nav>


        
        {{-- the positioned row  --}}
        <div class="container-fluid  position-relative  " style="top: -150px;">
            
            <div class="row px-4 ms-1" >
                <div class="w-100 d-flex justify-content-end column-gap-2 ">
                    <button class="btn btn-info text-white d-flex align-items-center "> <span class="material-symbols-outlined text-white "> add</span>   add new category</button>
                    <button class="btn btn-info text-white d-flex align-items-center "> <span class="material-symbols-outlined text-white me-1">draft </span>   import from Csv</button>

                    <div class="dropdown">
                        <button class="btn btn-dark  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-pen-to-square"></i>Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>


                </div>
            </div>


            <div class="row mt-4 px-4 " >
                <div class="col">
                    <div class="card shadow border-0  " >
                        <div class="card-header border-0   py-3 pb-3 bg-white  " >
                           <div class="d-flex justify-content-between align-content-center pb-3   "> 
                               <h5 class="text-center m-2 ">Restaurant Menu management (English)</h5>
                               <div class="d-flex align-items-center   column-gap-2 ">
                                    <button class="btn btn-primary">Back</button>
                               </div>
                           </div>   
                                
                        </div>  
                        <div class="card-body p-4 " style="background-color: #f8fafc;">
                            <div class="my-4 d-flex flex-column  row-gap-4 ">
                                <div class="d-flex align-items-center justify-content-between p-2 rounded  " style="background-color: var(--default);">
                                  <h3 class="p-2 text-white " for=""><strong>SOFT DRINKS</strong></h3>
                                  <div class="d-flex">
                                  <div class=" me-1 ">
                                  <button class=" p-0 raziBtn " style="background-color: var(--primary);"><span class="material-symbols-outlined p-0 ">add</span></button>
                                  <button class=" p-0 raziBtn" style="background-color: var(--orange);"> <span class="material-symbols-outlined p-0">edit</span></button>
                                  <button class="p-0 raziBtn " style="background-color:var(--danger) ;"><span class="material-symbols-outlined p-0">delete</span></button>
                                  </div>
                                  <div class="border"></div>
                                  <div class=" ms-1">
                                  <button class=" p-0 raziBtn" style="background-color: var(--success);"><span class="material-symbols-outlined">arrow_downward</span></button>
                                  <button class=" p-0 raziBtn" style="background-color: var(--success);"> <span class="material-symbols-outlined">arrow_upward</span></button>
                                  </div>
                                  </div>
                                </div>
                                
                                <div class="row row-gap-5 ">
                                    
                                    <div class="col-3">
                                        <div class="card" style="width: 16rem;">
                                            <img src="/images/ARA.jpg" class="card-img-top" alt="...">
                                            <div class="card-body my-1 d-flex flex-column row-gap-3 ">
                                              <h5 class="card-title text-center ">Card title</h5>
                                              <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                              <span style="max-width: 65px;" class="badge rounded-pill bg-primary text-primary d-inline-block  ">$ 10.00</span>
                                              <span class="text-success ">Available</span>
                                              <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card" style="width: 16rem;">
                                            <img src="/images/ARA.jpg" class="card-img-top" alt="...">
                                            <div class="card-body my-1 d-flex flex-column row-gap-3 ">
                                              <h5 class="card-title text-center ">Card title</h5>
                                              <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                              <span style="max-width: 65px;" class="badge rounded-pill bg-primary text-primary d-inline-block  ">$ 10.00</span>
                                              <span class="text-success ">Available</span>
                                              <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card" style="width: 16rem;">
                                            <img src="/images/ARA.jpg" class="card-img-top" alt="...">
                                            <div class="card-body my-1 d-flex flex-column row-gap-3 ">
                                              <h5 class="card-title text-center ">Card title</h5>
                                              <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                              <span style="max-width: 65px;" class="badge rounded-pill bg-primary text-primary d-inline-block  ">$ 10.00</span>
                                              <span class="text-success ">Available</span>
                                              <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card" style="width: 16rem;">
                                            
                                            <div class="card-body my-1 d-flex flex-column row-gap-3 ">
                                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <div class="text-center  mt-2 p-0">
                                                    <svg style="border: 10px solid #ADBED1; border-radius: 50%;" class="p-1" xmlns="http://www.w3.org/2000/svg" height="120" width="118.25" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#76cd26" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                                                </div>
                                                <span class="text-primary text-center fw-bold fs-4">Add Item</span>
                                              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                                </button>
                                                

                                                <!-- Modal -->
                                                <div class="modal fade border-0 " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog ">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5 ps-2 " id="exampleModalLabel">Add new Item</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body d-flex flex-column align-items-center px-5 row-gap-4 rounded " style= "background-color: #F7F8FA !important;">
                                                            <input class="form-control mt-4" placeholder="Item name..." type="text" name="" id="">
                                                            <textarea class="form-control" placeholder="Item description..."  name="" id="" cols="30" rows="10" style="height: 75px;"></textarea>
                                                            <input class="form-control" placeholder="Item Price..." type="text" name="" id="">

                                                            <div class="w-100 d-flex flex-column justify-content-center   align-items-center row-gap-3  ">
                                                                <label for="" style="color: #32325d;">Item Image</label>
                                                                <img id="imagePreview" height="150px" width="200px" class="border border-white border-4 " style="border-radius: 5px;" src="/images/blankImage.svg" alt="">
                                                                    <label for="fileInput" style="position: relative;    z-index: 100;">
                                                                        <input type="file"  style="display: none;" >
                                                                        <a  class="text-blue" >Select Image</a>
                                                                    </label>
                                                            </div>
                                                            <button type="button" class="btn btn-primary mt-3 p-2 px-3" style="max-width: 180px;">Save changes</button>
                                                            <br>
                                                        </div>
                                                        
                                                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                            
                                                    </div>
                                                    </div>
                                                </div>


                                            </div>
                                          </div>
                                    </div>
                                    
                                </div>
                                    
        
                                </div>

                                <div class="my-4 d-flex flex-column  row-gap-4 ">
                                    <div class="d-flex align-items-center justify-content-between p-2 rounded  " style="background-color: var(--default);">
                                      <h3 class="p-2 text-white " for=""><strong>SOFT DRINKS</strong></h3>
                                      <div class="d-flex">
                                      <div class=" me-1 ">
                                      <button class=" p-0 raziBtn " style="background-color: var(--primary);"><span class="material-symbols-outlined p-0 ">add</span></button>
                                      <button class=" p-0 raziBtn" style="background-color: var(--orange);"> <span class="material-symbols-outlined p-0">edit</span></button>
                                      <button class="p-0 raziBtn " style="background-color:var(--danger) ;"><span class="material-symbols-outlined p-0">delete</span></button>
                                      </div>
                                      <div class="border"></div>
                                      <div class=" ms-1">
                                      <button class=" p-0 raziBtn" style="background-color: var(--success);"><span class="material-symbols-outlined">arrow_downward</span></button>
                                      <button class=" p-0 raziBtn" style="background-color: var(--success);"> <span class="material-symbols-outlined">arrow_upward</span></button>
                                      </div>
                                      </div>
                                    </div>
                                    
                                    <div class="row">
                                        
                                        <div class="col-3">
                                            <div class="card" style="width: 16rem;">
                                                <img src="/images/ARA.jpg" class="card-img-top" alt="...">
                                                <div class="card-body my-1 d-flex flex-column row-gap-3 ">
                                                  <h5 class="card-title text-center ">Card title</h5>
                                                  <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                                  <span style="max-width: 65px;" class="badge rounded-pill bg-primary text-primary d-inline-block  ">$ 10.00</span>
                                                  <span class="text-success ">Available</span>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 16rem;">
                                                <img src="/images/ARA.jpg" class="card-img-top" alt="...">
                                                <div class="card-body my-1 d-flex flex-column row-gap-3 ">
                                                  <h5 class="card-title text-center ">Card title</h5>
                                                  <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                                  <span style="max-width: 65px;" class="badge rounded-pill bg-primary text-primary d-inline-block  ">$ 10.00</span>
                                                  <span class="text-success ">Available</span>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 16rem;">
                                                <img src="/images/ARA.jpg" class="card-img-top" alt="...">
                                                <div class="card-body my-1 d-flex flex-column row-gap-3 ">
                                                  <h5 class="card-title text-center ">Card title</h5>
                                                  <span class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                                                  <span style="max-width: 65px;" class="badge rounded-pill bg-primary text-primary d-inline-block  ">$ 10.00</span>
                                                  <span class="text-success ">Available</span>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card" style="width: 16rem;">
                                                
                                                <div class="card-body my-1 d-flex flex-column row-gap-3 ">
                                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <div class="text-center  mt-2 p-0">
                                                        <svg style="border: 10px solid #ADBED1; border-radius: 50%;" class="p-1" xmlns="http://www.w3.org/2000/svg" height="120" width="118.25" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#76cd26" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                                                    </div>
                                                    <span class="text-primary text-center fw-bold fs-4">Add Item</span>
                                                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                                    </button>
                                                    

                                                    <!-- Modal -->
                                                    <div class="modal fade border-0 " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h1 class="modal-title fs-5 ps-2 " id="exampleModalLabel">Add new Item</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body d-flex flex-column align-items-center px-5 row-gap-4 rounded " style= "background-color: #F7F8FA !important;">
                                                                <input class="form-control mt-4" placeholder="Item name..." type="text" name="" id="">
                                                                <textarea class="form-control" placeholder="Item description..."  name="" id="" cols="30" rows="10" style="height: 75px;"></textarea>
                                                                <input class="form-control" placeholder="Item Price..." type="text" name="" id="">

                                                                <div class="w-100 d-flex flex-column justify-content-center   align-items-center row-gap-3  ">
                                                                    <label for="" style="color: #32325d;">Item Image</label>
                                                                    <img id="imagePreview" height="150px" width="200px" class="border border-white border-4 " style="border-radius: 5px;" src="/images/blankImage.svg" alt="">
                                                                        <label for="fileInput" style="position: relative;    z-index: 100;">
                                                                            <input type="file" id="fileInput" style="display: none;" value="upload image">
                                                                            <a  class="text-blue" >Select Image</a>
                                                                        </label>
                                                                </div>
                                                                <button type="button" class="btn btn-primary mt-3 p-2 px-3" style="max-width: 180px;">Save changes</button>
                                                                <br>
                                                            </div>
                                                            
                                                                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                                
                                                        </div>
                                                        </div>
                                                    </div>


                                                </div>
                                              </div>
                                        </div>
                                        
                                    </div>
                                        
            
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                           
                        


                            
                        </div>

                        
                    </div>
                    
                    
                </div>

            </div>
            
           
        </div>
    



     



    </div>


    {{-- @include('layouts.scriptTags') --}}
</body>

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



</html>
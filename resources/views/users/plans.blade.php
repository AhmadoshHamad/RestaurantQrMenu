<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Share</title>
    @include('layouts.links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    @include("layouts.sidebar")
    <div class=" ahmad  ">
        <nav class="navbar  text-white " style="    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important" >

            <div  class=" container-fluid">
                    
                <div class="row w-100 ms-2">

                    <h5 class="col-3  align-items-center  d-flex mb-0">Plans</h5>
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


        <div class="container-fluid  position-relative   " style="top: -130px;">

          


            <div class="row mt-4 px-4 mb-4 " >
                <div class="col">
                    <div class="card shadow border-0  " style="background-color: f8f9fe;">
                        <div class="card-header border-0   py-4 px-4 bg-white  gy-2 " >
                           <h5>your current plan</h5>

                        </div>    
                                
                           
                        <div class="card-body rounded " style="background-color: #f6f9fc;"  >
                            <p class="ms-2">your cureently using Mega plan</p>
                            <div class="alert text-white bg-success " style="background-color: ">you can recieve unlimited number of orders</div>
                            <div class="alert text-white bg-success " style="background-color: ">you can add unlimited number of items</div>
                            <p class="ms-2"> Status: <strong>Set bt admin</strong></p>



                            
                        </div>

                        
                    </div>
                    
                </div>

            </div>

            <div class="row mt-4 px-4 row-gap-5 " >
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded  shadow ">
                        <div class="card-header py-3 bg-white   border-0 d-flex justify-content-between ">
                            <h5 class="card-title ms-2 ">Free</h5>
                            <h5 class="card-title">$0.00/m</h5>
                        </div>
                        <div class="card-body p-0 rounded " > 
                            {{-- no card-body because it has some default values --}}
                            
                            <ul class="list-group list-group-flush  ">
                                <li class="list-group-item py-3 " style="background-color: #f6f9fc"><span class="ms-2">Features</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                
                                
                                
                            </ul>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <button class="btn btn2 btn-dark ">Switch to Free</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded  shadow ">
                        <div class="card-header py-3 bg-white   border-0 d-flex justify-content-between ">
                            <h5 class="card-title ms-2 ">Free</h5>
                            <h5 class="card-title">$0.00/m</h5>
                        </div>
                        <div class="card-body p-0 rounded " > 
                            {{-- no card-body because it has some default values --}}
                            
                            <ul class="list-group list-group-flush  ">
                                <li class="list-group-item py-3 " style="background-color: #f6f9fc"><span class="ms-2">Features</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                
                                
                                
                            </ul>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <button class="btn btn2 btn-dark ">Switch to Free</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded  shadow ">
                        <div class="card-header py-3 bg-white   border-0 d-flex justify-content-between ">
                            <h5 class="card-title ms-2 ">Free</h5>
                            <h5 class="card-title">$0.00/m</h5>
                        </div>
                        <div class="card-body p-0 rounded " > 
                            {{-- no card-body because it has some default values --}}
                            
                            <ul class="list-group list-group-flush  ">
                                <li class="list-group-item py-3 " style="background-color: #f6f9fc"><span class="ms-2">Features</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                
                                
                                
                            </ul>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <button class="btn btn2 btn-dark ">Switch to Free</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded  shadow ">
                        <div class="card-header py-3 bg-white   border-0 d-flex justify-content-between ">
                            <h5 class="card-title ms-2 ">Free</h5>
                            <h5 class="card-title">$0.00/m</h5>
                        </div>
                        <div class="card-body p-0 rounded " > 
                            {{-- no card-body because it has some default values --}}
                            
                            <ul class="list-group list-group-flush  ">
                                <li class="list-group-item py-3 " style="background-color: #f6f9fc"><span class="ms-2">Features</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                <li class="list-group-item py-3 "><span class="ms-2">ahmad</span></li>
                                
                                
                                
                            </ul>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <button class="btn btn2 btn-dark ">Switch to Free</button>
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
            /* max-width: 150px !important; */
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
    

    let buttons = document.querySelectorAll('.btn2');

buttons.forEach(element => {

    element.addEventListener('click', () => {
        buttons.forEach(function(a) {
            a.classList.remove('disabled')
        })
         element.classList.add('disabled')
    });
});



//     buttons[0].addEventListener('click', () =>{
//         buttons[1].classList.add('disabled')
//         buttons[2].classList.add('disabled')
//         buttons[3].classList.add('disabled')
// })


</script>
    
</body>
</html>
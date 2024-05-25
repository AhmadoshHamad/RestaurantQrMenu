<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    @include('layouts.links')
</head>
<body>
    <div class="container-fluid">
        <div class="row ps-2 pb-2" style="background-color: rgb(248, 249, 252);">
            <div class="d-flex justify-content-between align-items-center ">
                <div class="col-6"><img src="/images/LogoBlack_NoBG.png"  alt=""  width="75"></div>
                <div class="col-6 text-end ">
                                <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#exampleModal">
                English
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="list-group text-center ">
                                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                                English
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">اللغة العربية</button>
                                <button type="button" class="list-group-item list-group-item-action">Español</button>
                                <button type="button" class="list-group-item list-group-item-action" disabled>中文</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

                </div>
            </div>
        </div>
            {{-- Scroll Menu Categories --}}
        <div  class="row pb-1">
            <div class="scrollmenu mt-2 d-flex column-gap-3 pb-2 ">
               <img class="active_c rounded-4 " width="60" src="/images/categories/pizza.png" alt="">
               <img width="60" src="/images/categories/sandwiches.png" alt="">
               <img width="60" src="/images/categories/soups.png" alt="">
               <img width="60" src="/images/categories/desserts.png" alt="">
               <img width="60" src="/images/categories/drinks.png" alt="">
               <img width="60" src="/images/categories/pizza.png" alt="">
               <img width="60" src="/images/categories/sandwiches.png" alt="">
               <img width="60" src="/images/categories/soups.png" alt="">
               <img width="60" src="/images/categories/desserts.png" alt="">
               <img width="60" src="/images/categories/drinks.png" alt="">
               
                <!-- Add more menu items as needed -->
            </div>

        </div>
        <div class="row row-cols-2 g-3 ">
            <div class="col">
                <div class="card">
                    <img src="/images/categories/pizza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"> Pepperouni pizza</p>
                      <span class="badge rounded-pill text-bg-success">20$</span>
                    </div>
                  </div>

            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/categories/pizza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"> Pepperouni pizza</p>
                      <span class="badge rounded-pill text-bg-success">20$</span>
                    </div>
                  </div>

            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/categories/pizza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-title "> Pepperouni pizza</p>
                      <span class="badge rounded-pill text-bg-success">20$</span>
                    </div>
                  </div>

            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/categories/pizza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"> Pepperouni pizza</p>
                      <span class="badge rounded-pill text-bg-success">20$</span>
                    </div>
                  </div>

            </div>
            
        </div>




    </div>
    
</body>

<style>
    body{
        background-color: #FEFEFE;
        /* margin: 0; */
    }


    .scrollmenu {
            overflow-x: auto;
            white-space: nowrap;
        }

        .scrollmenu a {
            display: inline-block;
            padding: 14px 16px;
            text-decoration: none;
        }

        .active_c{
            background-color: rgb(255, 255, 12);
            border-radius: 5px;
        }
</style>

</html>
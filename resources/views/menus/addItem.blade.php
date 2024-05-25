<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add Item</title>
    @include('layouts.links')
</head>
<body>



    <div class="container-fluid" style="background-color: #fafafa">
        <div class="row h-100 d-flex justify-content-center align-items-center  ">
            <div class="col-4">
                <div class="card position-fixed  " style="width: 500px;">
                    <div class="card-header d-flex justify-content-between align-items-center ">
                        <div class="card-title">Add new Item</div>
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                    <div class="card-body d-flex flex-column align-items-center  row-gap-3 ">
                        <input class="form-control" placeholder="Item name..." type="text" name="" id="">
                        <textarea class="form-control" placeholder="Item description..."  name="" id="" cols="30" rows="10" style="height: 75px;"></textarea>
                        <input class="form-control" placeholder="Item name..." type="text" name="" id="">

                        <div class="w-100 d-flex flex-column justify-content-center   align-items-center ">
                            <label for="">Item Image</label>
                            <img id="imagePreview" height="150px" width="150px" class="border" style="border-radius: 5px;" src="/images/ARA.jpg" alt="">
                                <label for="fileInput" style="position: relative;    z-index: 100;">
                                <input type="file" id="fileInput" style="display: none;" value="upload image">
                                <a  class="text-blue" >Select Image</a>

                            </div>
                            
                            <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
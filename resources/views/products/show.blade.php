<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,600,0,200" />

</head>
<body>
    <header class="container-fluid bg-white p-2">
        <div class="row ">
            <div class="col-8 d-flex align-items-center">
                <img style="width: 70px;" src="public/images/LogoBlack_NoBG.png" alt="">
            </div>
            <div class="col">
                <div class="d-flex justify-content-end align-items-center mr-3" style="column-gap: 10px;">
                    <img  style="width: 50px; height: 50px; object-fit: contain;" class="border rounded-circle" src="public/images/LogoBlack_NoBG.png" alt="">
                    <span>{{auth()->user()->name}}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid d-flex flex-column  m-3">
        <form method="get" action="/menus/{{$menu->id}}/{{$category->id}}/create">
            @csrf
            <div class="d-flex justify-content-end mr-4 mb-3 ">
                <button type="submit" class="btn btn-primary">Create A Product</button>
            </div>
        </form>
        <table class="table table-striped rounded">
            <thead>
                
                <th>VMenu Name</th>
                <th>Preview URL</th>
                <th>Created At</th>
                <th>Action</th>
            </thead>
            @foreach($products as $product)
            {{-- <img src="{{$menu->image ? asset('storage/'.$menu->image) : asset('/images/menu.png')}}"> --}}
            <tr>
                <td> {{ $product->name }}</td>
                <td>hello.com</td>
                <td>{{ $product->created_at }}</td>
                <td>
                     <a href="/menus/{{$menu->id}}/{{$category->id}}/{{$product->id}}/edit">
                        <span style="cursor: pointer;" class="material-symbols-outlined"> edit </span>
                    </a>

                    <a href="/menus/{{$menu->id}}/{{$category->id}}/{{$product->id}}/delete">
                        <span style="cursor: pointer; color: red;" class="material-symbols-outlined"> delete </span>
                    </a>          
                </td>
                @endforeach
            </tr>
        </table>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<style>
   
    body{
        background-color: rgb(250, 250, 250);
    }
    span{
        color: black;
    }
</style>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,600,0,200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,300,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @include('layouts.navbar');

    <div style="position: absolute; top: 85px; left:250px; width: 80%" class="container-fluid d-flex flex-column  m-3 ">

        <div class=" d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center ms-2 bg-white p-1 px-2 border rounded" style="border-radius: 15px; height: 40px;column-gap: 8px; width: 300px; ">
                <span class="material-symbols-outlined">search</span>
                <input style="outline: none;width: 250px" class="border-0" id="searchUser" type="text" placeholder="Search..">
            </div>
            <form method="get" action="/menu/create">
                @csrf
                <div class="d-flex justify-content-end me-4 mb-1 ">
                    <button type="submit" class="btn btn-primary p-2 px-3 ">Add User</button>
                </div>
            </form>
        </div>
        {{-- <form method="POST" action="/logout">
            @csrf
            <button type="submit">Log out</button>
        </form> --}}

        <table class="mytable  ">
            <thead>
                
                <th style="text-align: start">Full Name </th>
                <th>Current Plan</th>
                <th>Impersonate</th>
                <th>Active</th>
                <th>Action</th>
            </thead>
            @foreach($users as $user)
            {{-- <img src="{{$menu->image ? asset('storage/'.$menu->image) : asset('/images/menu.png')}}"> --}}
            <tr>
                {{-- must be ffirst and last name --}}
                <td class="d-flex ms-3" style="text-align: start; column-gap: 15px;">
                    <img style="width: 50px; height: 50px;  object-fit: contain" class="rounded-circle border" src="/images/LogoBlack_NoBG.png" alt="">
                    <div class="d-flex flex-column " >
                        <strong >
                            {{ $user->name }} 
                        </strong>
                        <span>{{$user->email}}</span>

                    </div>
                    </td> 
                <td>Pdf</td>
                <td>
                    <a href="/admin/dashboard/{{$user->id}}"><button class="btn btn-primary px-3 ">Impersonate</button></a>
                </td>
                <td>
                    <div class="form-check form-switch d-flex justify-content-center" >
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="width: 50px; height: 25px;;">
                    </div>
                </td>
                <td>

                    <a href="/menus/{{$user->id}}/categories">
                        {{-- <span style="color: blue" class="material-symbols-outlined">    visibility    </span> --}}
                        <span style="color: gold" class="material-symbols-outlined"> key </span>
                    </a>

                    <a href="/menu/{{$user->id}}/edit">
                        <span style="cursor: pointer;" class="material-symbols-outlined"> edit </span>
                    </a>

                    <a href="/menu/{{$user->id}}/delete">
                        <span style="cursor: pointer; color: red;" class="material-symbols-outlined"> delete </span>
                    </a>
                    
                    
                </td>
            </tr>
            @endforeach
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>


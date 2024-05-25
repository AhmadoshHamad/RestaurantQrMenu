{{-- <form  method="POST" action="/users/authenticate">
    @csrf
    <div class="inputDiv">
        <label for="email">Email</label>
        <input name="email" type="email" required >
    </div>
    
        <div class="inputDiv">
            <label for="password">Password</label>
            <input name ="password" type="password" required >
        </div>   
    @error('password')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror    
        <button type="submit">Submit</button> 
</form> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.links')
</head>
<body>
        
    <div class="container-fluid position-absolute    " style=" top:17%" >
        <div class="row  h-100 ">
            <div class="col-3 h-100"></div>
            <div class="col h-100 shadow rounded-4   ">
                <div class="row bg-white  rounded-4   ">
                    <div id="element1" class="col-6 p-3 pb-5 d-inline-block  swap-transition">
                        <div class="w-100 d-flex flex-column  justify-content-center  align-items-center ">
                            <h1  style=" margin:50px ">Sign in</h1>
                            <form class="w-100 px-2 d-flex flex-column align-items-center row-gap-3" method="POST" action="/users/authenticate">
                                @csrf
                                @method('POST')
                                <div class="form-floating  w-100 d-flex flex-column  justify-content-center  align-items-center" >
                                    <input  value = "{{old('email')}}" name = "email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label  for="floatingInput">Email address</label>
                                </div>
                                  
                                <div class="w-100 mb-3 form-floating d-flex flex-column  justify-content-center  align-items-center">
                                    <input value = "{{old('password')}}" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                  @error('email')
                                  <span style="color:red;">{{$message}}</span>
                                  @enderror
                                  <a class="w-100 text-center " href="#">Forget Your Password?</a>
                                  <button class="btn text-white px-5 p-2 btn-primary border-0 " >Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div id="element2" class="col-6 p-3 rounded-4 pb-5 d-inline-block  swap-transition" style=" background: linear-gradient(180deg, #5e72e4 0, #825ee4 100%) !important; border-top-left-radius: 130px !important; border-bottom-left-radius: 100px !important;">
                        <div class="d-flex flex-column  align-items-center text-white h-100 " >
                            <h2 class="mb-3" style="margin-top: 40%">Hello, Freind!</h2>
                            <p class="ms-3 px-3 text-center ">Do you want to discover the amazing world behind the ARA ?</p>
                            <button onclick="swapElements()" class="mt-3 px-5 btn btn1 border border-3 border-white ">Discover</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-3 h-100"></div>
        </div>

    
</body>
<style>
    body{
        background-color: #fafafa

    }
    .btn-primary{
        background-color: #5e72e4;
    }

    .btn1{
        background-color:transparent ;
        color: white;
        transition: all 0.5s  ease-in-out;
    }
    .btn1:hover{
        background-color: white;
        color: #5e72e4 ;
    }

    .swap-transition{
    transition: all 0.4s ease-in-out;
}



</style>

<script>
// Variable to track the current state
let isSwapped = false;

function swapElements() {
    var element1 = document.getElementById('element1');
    var element2 = document.getElementById('element2');

    // Get the parent node
    var parent = element1.parentNode;

    // Check the current state
    if (isSwapped) {
        // If swapped, revert the elements back to their original order
        parent.insertBefore(element1, element2);
    } else {
        // If not swapped, swap the elements by changing their positions
        parent.insertBefore(element2, element1);
    }

    // Toggle the state
    isSwapped = !isSwapped;

    // Apply a class to trigger the transition effect
    element1.classList.add('swap-transition');
    element2.classList.add('swap-transition');

  
    element2.style.borderTopLeftRadius = 0 +'px';
    element2.style.borderBottomLeftRadius =   0 +'px';

    element2.style.borderTopRightRadius = 130 + 'px' ;
    element2.style.borderBottomRightRadius =  100 + 'px';
    
    // After the transition duration, remove the class from both elements
    setTimeout(function () {
        element1.classList.remove('swap-transition');
        element2.classList.remove('swap-transition');
    }, 800); // Adjust this value to match your transition duration
}



// Usage example:




    
</script>
</html>

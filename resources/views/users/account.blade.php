<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>account settings</title>
    @include('layouts.links')
</head>
<body>

    @include('layouts.navbar');
    <div style="position: absolute; top: 85px; left:250px; width: 80%; border-radius:7.5px; " class="container-fluid d-flex flex-column  m-3 bg-white p-2">
        {{-- <div style="">
              <label for="">Avatar<span style="color: red"> *</span> </label>  
        </div> --}}

        
        {{-- <div class="bg-primary square card" >
            <div class="square bg-warning card" >
                <div class="square bg-sucess card">
                    <div class="square bg-danger card"></div>
                </div>
            </div>
        </div> --}}

        <div class="grid gap-3 column-gap-2">
            <div class="g-col-3">1</div>
            <div class="g-col-3">1</div>
            <div class="g-col-3">1</div>
            <div class="g-col-3">1</div>
            
        </div>

    </div>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
<style>
    .square{
        height: 500px;
        width: 500px;
    }
    .card{
        position: absolute;
        top:25px;
    }
</style>
</html>
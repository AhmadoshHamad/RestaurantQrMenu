<div class="col  d-flex justify-content-end column-gap-3 ">
    <div class="d-none d-md-flex justify-content-between align-items-center column-gap-1">
        <span class="material-symbols-outlined">storefront</span>
        <span >Restaurant</span>
    </div>
    <div class=" me-1 dropdown-center " >
        <button style = "color: #F0F0F0;" class=" btn  dropdown-toggle d-flex justify-content-between align-items-center column-gap-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="rounded-circle border" src="/images/logo-small.png" width="40" height="40" alt="">
            <span style = "color: #FAFAFA;" class="d-none d-sm-block ">House</span>
        </button>
            <ul class="dropdown-menu dropdown-menu-end ">
              {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
              <li><a class="dropdown-item " href="#">Account Settings</a></li>
              <li><a class="dropdown-item" href="#">
                    <form  method="POST" action="/logout">
                    @csrf
                    <button class="bg-transparent border-0 p-0" type="submit">Log out</button>
                    </form>
                </a></li>
            </ul>
          


    </div>
</div>
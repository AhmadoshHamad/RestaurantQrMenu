
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="4v71eHAjWZSbCNY68gjmUJFZ5GW2On2X4nQHa24z">



                <title>QR Menus</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <!-- Fonts -->
        <link href="https://app.qrmenus.me/css/gfonts.css" rel="stylesheet">
        
        <!-- Icons -->
        <link href="https://app.qrmenus.me/argon/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="https://app.qrmenus.me/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="https://app.qrmenus.me/argon/css/argon.css?v=1.0.0" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="https://app.qrmenus.me/custom/css/custom.css" rel="stylesheet">
        <!-- Select2 -->
        <link type="text/css" href="https://app.qrmenus.me/custom/css/select2.min.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://app.qrmenus.me/vendor/jasny/css/jasny-bootstrap.min.css">
        <!-- Flatpickr datepicker -->
        <link rel="stylesheet" href="https://app.qrmenus.me/vendor/flatpickr/flatpickr.min.css">

         <!-- Font Awesome Icons -->
        <link href="https://app.qrmenus.me/argonfront/css/font-awesome.css" rel="stylesheet" />

        <!-- Lottie -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


        <!-- Range datepicker -->
        <link rel="stylesheet" type="text/css" href="https://app.qrmenus.me/vendor/daterangepicker/daterangepicker.css" />

                <!-- Web Application Manifest -->
<link rel="manifest" href="https://app.qrmenus.me/manifest.json">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#000000">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="QR Menus">
<link rel="icon" sizes="256x256" href="android-chrome-256x256.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="QR Menus">
<link rel="apple-touch-icon" href="android-chrome-256x256.png">


<link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="android-chrome-256x256.png">

<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            
        }, function (err) {
            // registration failed :(
            
        });
    }
</script>        <!-- CSS Files -->
 
 <link rel="stylesheet" href="https://app.qrmenus.me/vendor/intltelinput/build/css/intlTelInput.css">
<style type="text/css">
    .iti__flag {background-image: url("/vendor/intltelinput/build/img/flags.png");}

@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  .iti__flag {background-image: url("/vendor/intltelinput/build/img/flags@2x.png");}
}
</style>

<script src="https://app.qrmenus.me/vendor/intltelinput/build/js/intlTelInput.js"></script>
<script src="https://app.qrmenus.me/vendor/intltelinput/build/js/utils.js"></script>
<script>

    function initPhone(name){
        var input = document.querySelector("input[name='"+name+"']");
        if(input!=null){
            var iti=window.intlTelInput(input, {
              nationalMode:true,
                hiddenInput: name,
                //customContainer:"form-controls",
                autoHideDialCode:true,
                separateDialCode:true,
                autoPlaceholder:"aggressive",
                initialCountry: "auto",
                utilsScript: "/vendor/intltelinput/build/js/utils.js", 
                geoIpLookup: function(success, failure) {
                    $.get("https://ipinfo.io?token=c2999fc5e1aefc",function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "us";
                    success(countryCode);
                    });
                },
            });


        var reset = function() {
		  input.classList.remove("error");
          setTheHidden();
		};

        var setTheHidden =function(){
            var theHidden=document.querySelector("input[type=hidden][name='"+name+"']");
            theHidden.value = iti.getSelectedCountryData().dialCode+input.value;
            console.log(theHidden.value);
        }


		input.addEventListener('change', reset);
		input.addEventListener('keyup', reset);	 

        input.addEventListener("countrychange", function() {
            setTheHidden();
        });

        setTheHidden();

        }
    }
    setTimeout(() => {
            initPhone('whatsapp_phone');
            initPhone('phone');
            initPhone('phone_owner');
            initPhone('phone_number');
            //initPhone('phone_driver');
            
            
        }, 3000);
  
</script>

        <!-- Custom CSS defined by admin -->
        <link type="text/css" href="https://app.qrmenus.me/byadmin/back.css" rel="stylesheet">




    </head>
    <body class="">
                    <form id="logout-form" action="https://app.qrmenus.me/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="4v71eHAjWZSbCNY68gjmUJFZ5GW2On2X4nQHa24z">            </form>
                            <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">

    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="/">
            <img src="/uploads/settings/0311dea3-4aaa-4ede-90bc-24623c7d8bad_logo.jpg" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            
                            
                            <img alt="..." src="https://www.gravatar.com/avatar/102e4c6b7e84cdbc66f459c4104dcd7d">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="https://app.qrmenus.me/profile" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="https://app.qrmenus.me/logout" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="https://app.qrmenus.me/home">
                            <img src="/uploads/settings/0311dea3-4aaa-4ede-90bc-24623c7d8bad_logo.jpg">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
                                        <span></span>
            
                            <span></span>
            
                            <span></span>
            
                            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="https://app.qrmenus.me/home">
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
                    <li class="nav-item">
                <a class="nav-link" href="/live">
                    <i class="ni ni-basket text-success"></i> Live Orders<div class="blob red"></div>
                </a>
            </li>
        
                    <li class="nav-item">
                <a class="nav-link" href="https://app.qrmenus.me/orders">
                    <i class="ni ni-basket text-orangse"></i> Orders
                </a>
            </li>
            
    <li class="nav-item">
        <a class="nav-link" href="https://app.qrmenus.me/restaurants/22/edit">
            <i class="ni ni-shop text-info"></i> Restaurant
        </a>
    </li>
            <li class="nav-item">
            <a class="nav-link" href="https://app.qrmenus.me/items">
                <i class="ni ni-collection text-pink"></i> Menu
            </a>
        </li>
        
                                        <li class="nav-item">
                    <a class="nav-link" href="https://app.qrmenus.me/tables">
                        <i class="ni ni-ungroup text-red"></i> Tables
                    </a>
                </li>
                        
    <!-- Exrta menus -->
        

            <li class="nav-item">
            <a class="nav-link" href="https://app.qrmenus.me/qr">
                <i class="ni ni-mobile-button text-red"></i> QR Builder
            </a>
        </li>
            
            <li class="nav-item">
            <a class="nav-link" href="https://app.qrmenus.me/simpledelivery">
                <i class="ni ni-pin-3 text-blue"></i> Delivery areas
            </a>
        </li>
    
            <li class="nav-item">
            <a class="nav-link" href="https://app.qrmenus.me/plan">
                <i class="ni ni-credit-card text-orange"></i> Plan
            </a>
        </li>
    
                    <li class="nav-item">
                <a class="nav-link" href="https://app.qrmenus.me/finances/owner">
                    <i class="ni ni-money-coins text-blue"></i> Finances
                </a>
            </li>
        
      
        

            <li class="nav-item">
            <a class="nav-link" href="https://app.qrmenus.me/share/menu">
                <i class="ni ni-send text-green"></i> Share
            </a>
        </li>
        

</ul>

            
                            <span></span>
            
                            <span></span>
            
            
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
                        
        </div>
    </div>
</nav>
                    
        <div class="main-content">
            <!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md  navbar-dark" id="navbar-main">
    <div class="container-fluid">

        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"></a>
        
        <!-- Form -->
        <form method="GET" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
           
        </form>
       
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">

           
          <!-- If user is owner or staff, show go to store-->
                                                  
                        <a href="https://app.qrmenus.me/restaurant/houseofdonuts" target="_blank" class="nav-link" role="button">
              <i class="ni ni-shop"></i>  
              <span class="nav-link-inner--text bold">Restaurant</span>
            </a>
                    <!-- End owner and staf -->
            
            
           

            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            
                            <img id="profile-image-nav" alt="..." src="https://www.gravatar.com/avatar/102e4c6b7e84cdbc66f459c4104dcd7d">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">house</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="https://app.qrmenus.me/profile" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="https://app.qrmenus.me/logout" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>

    </div>

</nav>
    
                <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8 mt--4">
           </div>





    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Areas management</h3>
                            </div>
                            
                                <div class="col-4 text-right">
                                                                            <a href="https://app.qrmenus.me/restoareas/create" class="btn btn-sm btn-primary">Add new area</a>
                                                                         
                                            <a href="https://app.qrmenus.me/tables?do_not_redirect=true" class="btn btn-sm btn-primary">Tables</a>
                                                                                                                                                                                </div>
                        </div>
                                            </div>

                    <div class="col-12">
                                            </div>

                                                               <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                                                                                                        <th>Name</th>
                                         
                                        <th>Actions</th>
                                                                       
                                       
                                </thead>
                                <tbody>
                                    <tr>
    <td>Indoor</td>
        <td>

                    <a href="https://app.qrmenus.me/floorplan/33" class="btn btn-success btn-sm"><span class="btn-inner--icon"><i class="ni ni-vector"></i></span> Floor Plan</a>
                <a href="https://app.qrmenus.me/restoareas/33/edit" class="btn btn-primary btn-sm"><span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span> Edit</a>
        <a href="https://app.qrmenus.me/restoareas/del/33" class="btn btn-danger btn-sm"><span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span> Delete</a>
    </td>
</tr> 
<tr>
    <td>ahmad</td>
        <td>

                    <a href="https://app.qrmenus.me/floorplan/34" class="btn btn-success btn-sm"><span class="btn-inner--icon"><i class="ni ni-vector"></i></span> Floor Plan</a>
                <a href="https://app.qrmenus.me/restoareas/34/edit" class="btn btn-primary btn-sm"><span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span> Edit</a>
        <a href="https://app.qrmenus.me/restoareas/del/34" class="btn btn-danger btn-sm"><span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span> Delete</a>
    </td>
</tr> 

                                </tbody>
                            </table>
                        </div>
                                        <div class="card-footer py-4">
                                                    <nav class="d-flex justify-content-end" aria-label="...">
                                
                            </nav>
                                            </div>
                   

                </div>
            </div>
        </div>

        <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
</div></footer>    </div>
        </div>

        
        <!-- Commented because navtabs includes same script -->
        <script src="https://app.qrmenus.me/argon/vendor/jquery/dist/jquery.min.js"></script>

        <script src="https://app.qrmenus.me/argonfront/js/core/popper.min.js" type="text/javascript"></script>
        <script src="https://app.qrmenus.me/argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        
        <script>
            var t="translationsen";
           window.translations = {"custom":{"customer_phone_number":"Customer phone number","delivery_area_name":"Delivery area name","client_phone":"Customer phone number","client_name":"Client name"}};
           
           
        </script>

        <!-- Navtabs -->
        <script src="https://app.qrmenus.me/argonfront/js/core/jquery.min.js" type="text/javascript"></script>


        <script src="https://app.qrmenus.me/argon/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

        <!-- Nouslider -->
        <script src="https://app.qrmenus.me/argon/vendor/nouislider/distribute/nouislider.min.js" type="text/javascript"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://app.qrmenus.me/vendor/jasny/js/jasny-bootstrap.min.js"></script>
        <!-- Custom js -->
        <script src="https://app.qrmenus.me/custom/js/orders.js"></script>
         <!-- Custom js -->
        <script src="https://app.qrmenus.me/custom/js/mresto.js"></script>
        <!-- AJAX -->

        <!-- SELECT2 -->
        <script src="https://app.qrmenus.me/custom/js/select2.js"></script>
        <script src="https://app.qrmenus.me/vendor/select2/select2.min.js"></script>

        <!-- DATE RANGE PICKER -->
        <script type="text/javascript" src="https://app.qrmenus.me/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="https://app.qrmenus.me/vendor/daterangepicker/daterangepicker.min.js"></script>

        <!-- All in one -->
        <script src="https://app.qrmenus.me/custom/js/js.js?id=3.4.1"></script>

        <!-- Argon JS -->
        <script src="https://app.qrmenus.me/argon/js/argon.js?v=1.0.0"></script>

         <!-- Import Vue -->
        <script src="https://app.qrmenus.me/vendor/vue/vue.js"></script>

        <!-- Import AXIOS --->
        <script src="https://app.qrmenus.me/vendor/axios/axios.min.js"></script>

        <!-- Flatpickr datepicker -->
        <script src="https://app.qrmenus.me/vendor/flatpickr/flatpickr.js"></script>

        <!-- Notify JS -->
        <script src="https://app.qrmenus.me/custom/js/notify.min.js"></script>

         <!-- Cart custom sidemenu -->
        <script src="https://app.qrmenus.me/custom/js/cartSideMenu.js"></script>


        <script>
            var ONESIGNAL_APP_ID = "";
            var USER_ID = '8';
            var PUSHER_APP_KEY = "15f731a878403e48b82e";
            var PUSHER_APP_CLUSTER = "eu";
        </script>
               

        <!-- OneSignal -->
        
                
        <script src="https://app.qrmenus.me/custom/js/rmap.js"></script>

         <!-- Pusher -->
                     <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
            <script src="https://app.qrmenus.me/custom/js/pusher.js"></script>
        
        <!-- Custom JS defined by admin -->
            </body>
</html>

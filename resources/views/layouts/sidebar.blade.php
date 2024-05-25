<nav class="raziYaKhara navbar navbar-nav navbar-expand-md bg-body  h-100  "  style="width: 240px;">
    <div class="container-fluid flex-column row-gap-4">
        
        
        <a href="/users/dashboard" class="navbar-brand pt-2">
            <img src="/images/LogoBlack_NoBG.png"  alt=""  width="75">
        </a>
        
        <ul class="nav flex-column border-bottom pb-3 w-100 ps-2 row-gap-2">

            <li class="nav-item ">
                <a  href="/users/dashboard" class="nav-link d-flex align-items-center column-gap-3">
                    <span  class="material-symbols-outlined " style="color: blueviolet">tv</span>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li id="live" class="nav-item ">
                <a  href="/users/liveorders" class="nav-link d-flex align-items-center column-gap-3">
                    <span  class="material-symbols-outlined " style="color: cadetblue">shopping_basket</span>
                    <span>Live Orders</span>
                    <div class="pulse"></div>
                </a>
            </li><li class="nav-item ">
                <a  href="/users/orders" class="nav-link d-flex align-items-center column-gap-3">
                    <span  class="material-symbols-outlined " style="color: coral">shopping_basket</span>
                    <span>Orders</span>
                </a>
            </li>
            <li class="nav-item ">
                <a  href="/users/restaurant" class="nav-link d-flex align-items-center column-gap-3">
                    <span  class="material-symbols-outlined " style="color: gold">storefront</span>
                    <span>Restaurant</span>
                </a>
            </li>
            
            <li class="nav-item ">
                <a  href="/users/menu" class="nav-link d-flex align-items-center column-gap-3">
                    <span class="material-symbols-outlined" style="color: deeppink">        menu_book                            </span>
                    <span>Menu</span>
                </a>
            </li>

            <li class="nav-item ">
                <a  href="/users/tables" class="nav-link d-flex align-items-center column-gap-3">
                    <span class="material-symbols-outlined" style="color: brown">        table_restaurant                            </span>
                    <span>Tables</span>
                </a>
            </li>
            
            <li class="nav-item ">
                <a  href="/users/qrBuilder" class="nav-link d-flex align-items-center column-gap-3">
                    <span class="material-symbols-outlined" style="color: black">        qr_code                            </span>
                    <span>Qr Builder</span>
                </a>
            </li>

            <li class="nav-item ">
                <a  href="/users/deliveryAreas" class="nav-link d-flex align-items-center column-gap-3">
                    <span class="material-symbols-outlined" style="color: red;">        location_on                            </span>
                    <span>Delivery Areas</span>
                </a>
            </li>

            <li class="nav-item ">
                <a  href="/users/plans" class="nav-link d-flex align-items-center column-gap-3">
                    <span class="material-symbols-outlined" style="color: darkcyan">        map                            </span>
                    <span>Plans</span>
                </a>
            </li>

            <li class="nav-item ">
                <a  href="/users/finances" class="nav-link d-flex align-items-center column-gap-3">
                    <span class="material-symbols-outlined text-success">        local_atm                            </span>
                    <span>Finance</span>
                </a>
            </li>

            <li class="nav-item ">
                <a  href="/users/share" class="nav-link d-flex align-items-center column-gap-3">
                    <span class="material-symbols-outlined" style="color: skyblue">        send                            </span>
                    <span>Share</span>
                </a>
            </li>
            
            
            
        </ul>
        
        
    </div>
</nav>





<style>

:root
{
    --blue: #5e72e4;
    --indigo: #5603ad;
    --purple: #8965e0;
    --pink: #f3a4b5;
    --red: #f5365c;
    --orange: #fb6340;
    --yellow: #ffd600;
    --green: #2dce89;
    --teal: #11cdef;
    --cyan: #2bffc6;
    --white: #fff;
    --gray: #8898aa;
    --gray-dark: #32325d;
    --light: #ced4da;
    --lighter: #e9ecef;
    --primary: #5e72e4;
    --secondary: #f7fafc;
    --success: #2dce89;
    --info: #11cdef;
    --warning: #fb6340;
    --danger: #f5365c;
    --light: #adb5bd;
    --dark: #212529;
    --default: #172b4d;
    --white: #fff;
    --neutral: #fff;
    --darker: black;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: Open Sans, sans-serif;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}



    body,html {
      height: 100vh;
      width: 100%;
    }
  
  
      body{
          background-color: rgb(233, 237, 240);
          margin: 0;
      }
  
  
      nav , .nav-link {
        color: rgb(200, 200, 200);
  
          /* background-color: antiquewhite; */
      }
      li:hover,.nav-link:hover{
          color: black;
      }

      .nav-link{
        padding-left: 7px;
      }
  
  
      .pulse{
          width:  10px;
          height: 10px;
          background: #ff6d4a;
          border-radius: 50%;
          color: #fff;
          font-size: 10px;
          text-align: center;
          line-height: 100px;
          font-family: sans-serif;
          animation: animate 1.7s linear infinite;
          }
      @keyframes animate {
          0% {
          box-shadow: 0px 0px 0px 0px rgba(255,109,74,0.5);
          }
          40% {
          box-shadow: 0px 0px 0px 10px rgba(255,109,74,0.3);
          }
          80% {
          box-shadow: 0px 0px 0px 10px rgba(255,109,74,0.1);
          }
          100% {
          box-shadow: 0px 0px 0px 10px rgba(255,109,74,0);
          }

          }
  
  
      .ahmad{
          margin-left: 240px;
          /* left:240px; */
      }
  
      .collapsedCol{
          display: none;
      }
      #CollapsedImage{
          display: none;
      }
  
      .raziYaKhara{
          position: fixed;
          left: 0;
      }

      .card{
        border: none;
      }

      .btn-primary{
        background-color: #5e72e4;
      }
      .btn-success{
        background-color: #2dce89;
      }
      .btn-danger{
        background-color: #f5365c;
      }
      .btn-info{
        background-color: #11cdef;
      }
      .btn-dark{
        background-color: var(--default);
      }
      .btn {
        border: none;
      }
  
  
      @media( max-width:1000px ){
  
          .col-3{
              display: none;
          }
          .raziYaKhara{
              display: none;
          }
          .ahmad{
              /* left:0px; */
              margin-left: 0px;
              /* background-color: white; */
          }
          #CollapsedImage{
              display: block;
          }
          .collapsedCol{
              display: flex;
              justify-content: center;
          }
  
      }
  
      /* @media(min-width:2000px){
          .ahmad{
              width: 100%;
          }
      } */
  
      @keyframes pulse-red {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }
  .bg-primary {
    background-color: #e5e8f9 !important;
}
.text-primary{
    color: #6b7bd5  !important;
}

.bg-blue {
    background-color: #5e72e4 !important;
}
.text-blue{
    color: #5e72e4  !important;
}

  .bg-success {
    background-color: #2dce89 !important;
}

  .bg-info {
    background-color: #11cdef !important;
}
.bg-red{
    background-color: #fce5e0 !important;
}

.text-red{
    color: #d98572 !important;
}

     
      
  
  </style>
  
  <script>
      const live = document.getElementById('live')
      live.addEventListener('click',() =>{
          sound.play()
      })
  </script>
  
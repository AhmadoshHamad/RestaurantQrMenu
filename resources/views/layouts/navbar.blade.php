<header class="container-fluid bg-gradient-primary py-1 pt-2 " style="height: 70px; ">
    <div class="row h-100">
        {{-- max-width: 200px; --}}
        <div id="logoDiv" style="width:250px; " class="border-bottom d-flex justify-content-around align-items-center p-1 pb-3 ps-4 " style="">
            <div style="display: none" class="w-100 d-flex justify-content-end align-items-center">
                <a href="/">
                    <img id="logoImg" style="width: 70px; "class="" src="/images/LogoBlack_NoBG.png" alt="">
                </a>

            </div>
            <div class="w-100 d-flex justify-content-end me-4 ">
                <span id="collapse" style="cursor: pointer; font-size: 30px;" class="material-symbols-outlined">dehaze </span>
            </div>
        </div>
        <div class="col d-flex align-items-center " style="background: linear-gradient(to right, #ff0000, #0000ff);">
        <div style="min-width:800px; " class="col d-flex align-items-center ms-2 ">
            <span  style="border-bottom:2px solid black; line-height: 1.5">Users</span>
        </div>
        <div style="min-width: 250px" class="col-3 ">
            <div class="d-flex justify-content-end align-items-center me-3" style="column-gap: 10px;">
                <span id="shiftmode" style="font-size: 30px;cursor: pointer; " class="material-symbols-sharp me-2"> nightlight</span>
                <div id="account_info" style="column-gap: 10px;" class=" d-flex align-items-center ">
                    <img  style="width: 50px; height: 50px; object-fit: contain;" class="border rounded-circle" src="/images/LogoBlack_NoBG.png" >
                    <span>{{auth()->user()->name . " hamadosh"}}</span>

                    <div id="dropdown-menu" class="py-7 pb-4 my-2  flex-column bg-white border hide"  data-bs-auto-close="outside"  style="width: 250px; position: absolute;  inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-15px, 50px, 0px); border-radius: 10px; opacity: 1; z-index: 100">
                        <div class=" w-100 d-flex flex-column justify-content-center align-items-center border-bottom py-2 g-2" style="row-gap: 10px;" >
                            <img  class="rounded-circle border " src="/images/LogoBlack_NoBG.png" alt="" style="width: 75px; height: 75px; object-fit: contain;">
                            <h5 class="mb-0">{{auth()->user()->name . " hamadosh"}}</h5>
                            <span>{{auth()->user()->email}}</span>
                        </div>

                        <ul class="py-2">

                            <li class="dropdown_li p-1 ">
                                <button  class="w-100 d-flex  align-items-center ps-3 border-0 bg-white" style="column-gap: 5px;">
                                    <span class="material-symbols-outlined"> person  </span>
                                    <span> account settings</span> 
                                </button>
                            </li>

                            <li class="dropdown_li p-1">
                                <button onclick="showPasswordForm();"  class="w-100 d-flex  align-items-center ps-3 border-0 bg-white" style="column-gap: 5px;">
                                    <span class="material-symbols-outlined"> lock  </span>
                                    <span> change password</span> 
                                </button>
                            </li>

                            <li class="dropdown_li p-1 ">
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button   class="w-100 d-flex  align-items-center ps-3 border-0 bg-white" style="column-gap: 5px;">
                                        <span class="material-symbols-outlined"> logout  </span>
                                        <span> log out</span> 
                                    </button>
                                </form>
                            </li>
                            
                        
                        </ul>
                    </div>
                </div>



            </div>
        </div>
        </div>
    </div>
</header>


<div id="sidebar" style="max-width: 250px; height: 100%; " class="d-flex flex-column bg-white  fixed-left align-items-center ">

    <div id="sidebarSearch" class="d-flex align-items-center  bg-white p-1 my-2 border rounded hide" style="border-radius: 15px; height: 35px;column-gap: 4px; ">
        <span class="material-symbols-outlined">search</span>
        <input  style="outline: none;" class="border-0" id="searchList" type="text" placeholder="Search..">
    </div>
    {{-- <div  class="container-fluid bg-success p-3" >
        <input class="w-100 " type="text"  " placeholder="  Search...">
    </div> --}}

    <ul id="sidebarList" class="w-100 pt-0 ">
        <a href="/sadmin/dashboard">
            <li aria-label="dashboard"  class="w-100 py-2 ps-2 ">
                <div class="container-fluid ">
                    <div class="w-100" style=" display: grid; grid-template-columns: 1fr 4fr; column-gap: 5px;">
                        <div style="margin-right: 5px;" class=" d-flex ">  <span  class="material-symbols-outlined">dashboard</span></div>
                        <div class=" d-flex  align-items-center ">  <span class="li_span">Dashboard</span>    </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="/sadmin/users">
            <li aria-label="users" class="w-100 py-2 ps-2">
                <div class="container-fluid ">
                    <div class="w-100" style=" display: grid; grid-template-columns: 1fr 4fr; column-gap: 5px;">
                        <div style="margin-right: 5px;" class=" d-flex "> <span  class="material-symbols-outlined">Groups</span> </div>
                        <div class=" d-flex  align-items-center ">  <span class="li_span">Users</span>   </div>
                    </div>
                </div>
            </li>
        </a>


        <li aria-label="plans" class="w-100 py-2  ps-2">
            <div class="container-fluid ">
                <div class="w-100" style=" display: grid; grid-template-columns: 1fr 4fr; column-gap: 5px;">
                    <div style="margin-right: 5px;" class=" d-flex ">  <span  class="material-symbols-outlined">content_paste</span></div>
                    <div class=" d-flex  align-items-center ">  <span class="li_span">Plans</span>    </div>
                </div>
            </div>
        </li>

        <li aria-label="analytics" class="w-100  py-2 ps-2">
            <div class="container-fluid ">
                <div class="w-100" style=" display: grid; grid-template-columns: 1fr 4fr; column-gap: 5px;">
                    <div style="margin-right: 5px;" class=" d-flex ">  <span  class="material-symbols-outlined">leaderboard</span></div>
                    <div class=" d-flex  align-items-center ">  <span class="li_span">Analytics</span>    </div>
                </div>
            </div>
        </li>

       

        
    </ul>
</div>


<div id="changePasswordForm" class="bg-white p-3 border rounded fixed-element pb-5 hide" style="width: 400px; ">

    <div class= "w-100 d-flex justify-content-between align-items-center border-bottom pb-3">
       <h5 class="d-inline">Change Password</h5>
       <span id="closeBtn" class="material-symbols-outlined">close </span>
    </div>

    <form action="" class=" w-100 d-flex flex-column p-2">
        <div class="d-flex flex-column p-1 pt-3 ">
            <label for="">Current Password <span style="color: red"> *</span> </label>
            <input placeholder="Current Password" class="form-control" type="text">
        </div>

        <div class="d-flex flex-column p-1 pt-3 ">
            <label for="">New Password <span style="color: red"> *</span> </label>
            <input placeholder="New Password" class="form-control" type="text">
        </div>

        <div class="d-flex flex-column p-1 pt-3 ">
            <label for="">Confirm Password <span style="color: red"> *</span> </label>
            <input placeholder="Confirm Password" class="form-control" type="text">
        </div>

        <div class="d-flex p-1 pt-3 justify-content-end">
            <div>
                <button class="btn-primary btn px-3 p-2" type="submit">Save</button>
                <button onclick="hidePasswordForm();return false;" class="btn-dark btn p-2 px-3" >Discard</button>

            </div>
        </div>
        
    </form>

</div>

<style>

       
  
   
    html, body {
        /* background-color: rgb(250, 250, 250); */
        height: 100%;
        min-width: 1450px;
        margin: 0;
        background-color: rgb(239, 243, 247);

    }
    span{
        color: black;
    }
    #logoDiv {
        transition: width 0.5s ease-in-out;
    }  


    .mytable {
       
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 15px;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 10px; /* Adjust the radius value as needed */
        overflow: hidden;
}

    th{
        background-color: rgb(233, 236, 239);
        
        height: 15px;
    }


th, td {
  text-align: center;
  padding: 15px;
  /* padding-left: 15px; */
  /* background-color: red; */
}

    tr:nth-child(odd) {
    background-color: white;
    
}

    tr:nth-child(even) {
    background-color: #f2f2f2;
    background-color: rgb(233, 236, 239);
    /* color: white  */
}

a{
    text-decoration: none;
}

#sidebar {
    transition: width 0.5s ease-in-out;
}

#sidebarSearch{
    transition: display 0.5s ease-in-out;
}


ul {
  list-style-type: none;
  /* margin: 0; */
  padding: 0;
}
ul span {
    color: rgb(108, 117, 125);
    font-family: Roboto;
}

li {
    cursor: pointer;
}
button{
    cursor: pointer;
}

li:hover{
    /* border-left: 4px solid rgb(78, 0, 155) ; */
    background-color: rgb(239, 243, 247);
    
    
}



.dropdown_li:hover{
    background-color: #f2f2f2;
}
/* .li_span:hover {
    color: white;
} */

.material-symbols-outlined{
    color: rgb(108, 117, 125);
    font-size: 30px;
}



#dropdropdown-menu {
    transition: opacity 0.3s ease-in-out;
}

#account_info {
    cursor: pointer;
}

.hide {
    display: none;
}

.fixed-element {
  position: fixed;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #ccc;
  padding: 20px;
  z-index: 100;
}

#closeBtn{
    cursor: pointer;
}

.dim {
        /* For Internet Explorer */
        box-shadow: 0 0 0 1000px rgba(0, 0, 0, .4);
       
        /* For other browsers */
        box-shadow: 0 0 0 100vmax rgba(0, 0, 0, .4);
    }

</style>

<script>
    const toggle = document.getElementById('collapse');
    const sidebar = document.getElementById('sidebar');
    const logoDiv = document.getElementById('logoDiv');
    const logoImg = document.getElementById('logoImg');
    const sidebarSearch = document.getElementById('sidebarSearch');
    let   li_span = document.querySelectorAll('.li_span');
    const account_info = document.getElementById('account_info');
    const dropdown_menu = document.getElementById('dropdown-menu');
    const sidebarList = document.getElementById('sidebarList') 
    const closeBtn =document.getElementById('closeBtn')
    const changePasswordForm = document.getElementById('changePasswordForm')
    const searchList = document.getElementById('searchList')

    dropdown_menu.style.display = 'none';
    console.log(li_span.length);
    toggle.addEventListener('click', () => {
    // Toggle the width of the sidebar and content
    if (sidebar.style.width === '250px') {
        sidebar.style.width = '80px';
     
        logoDiv.style.width = '80px';
        logoImg.style.display = 'none';
        sidebarSearch.classList.remove('d-flex');
     
        li_span.forEach(element => {
            element.classList.add('hide');
        });

    }
     else {
        sidebar.style.width = '250px';
        logoImg.style.display = 'block';
        logoDiv.style.width = '250px';
        sidebarSearch.classList.add('d-flex');
        
        li_span.forEach(element => {
            element.classList.remove('hide');
        });
       
    }
});



let trElements = document.getElementsByTagName('tr');
    
    for (let i = 0; i < trElements.length; i++) {
        if(i%2!=0)
        trElements[i].style.backgroundColor =  '#ffffff';
    
}


account_info.addEventListener("click", () => {
    console.log(11);

    if(dropdown_menu.classList.contains('d-flex')){
        dropdown_menu.classList.remove('d-flex');
    }
    else
        dropdown_menu.classList.add('d-flex');
})

let shiftmode = document.getElementById('shiftmode');
shiftmode.addEventListener('click',() =>{
    if(shiftmode.textContent == 'nightlight'){
        shiftmode.textContent = 'brightness_high';
        document.body.style.color = 'white'
        document.body.style.backgroundColor = 'black';
    }
    else{
        shiftmode.textContent = 'nightlight';
        document.body.style.color = 'black'
        document.body.style.backgroundColor = 'rgb(239, 243, 247)';
    }

});

// search the li elements
sidebarSearch.addEventListener('change',() => {
    console.log('fsd');
})

closeBtn.addEventListener('click',() => {
    changePasswordForm.classList.add('hide');

})
function showPasswordForm(){
    changePasswordForm.classList.remove('hide');
    changePasswordForm.classList.add('dim')
}
    searchList.addEventListener('input',function(){
        let inputText = searchList.value;
        
        Array.from(sidebarList.getElementsByTagName('li')).forEach((element) => {
            if(!element.getAttribute("aria-label").includes(inputText))
               element.classList.add('hide');
            else if(element.getAttribute("aria-label").includes(inputText) && element.classList.contains('hide'))
                element.classList.remove('hide') 
            
        })
    //    array.forEach
       
            // console.log(element.getAttribute("aria-label"))
    

    })

    function hidePasswordForm(){
    changePasswordForm.classList.add('hide');
    changePasswordForm.classList.remove('dim')
}


</script>
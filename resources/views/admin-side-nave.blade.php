<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== fontawesome======== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
   
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 --}}

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    {{-- ----------jquery------- --}}
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    <style>

        
        /* Google Font Import - Poppins */
        
/* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'); */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    /* font-family: 'Poppins', sans-serif; */
    font-family: 'Source Sans Pro', sans-serif;
}

.container-2{
    width: 90%;
    margin: auto;
}
@media only screen and (max-width:  1000px)
{
    .overflow-menu{
        display: flex;
            justify-content: flex-start;
            overflow-x: scroll;

}
.overflow-menu::-webkit-scrollbar
                {
                    width: 0;
                    height: 0;
                } 
}


:root{
    /* ===== Colors ===== */
    --body-color: #fff;
    --model-color: #fff ;
    --sidebar-color: #FFF;
    --primary-color: #695CFE;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --tablebody-color:#cd4f74;
    --text-color: #707070;
    --btn-color: #fff;
    --add-btn-color:#08330a;
    --submit-btn-color:#098663;
    --view-btn-color:#3c976d ;
    --proceed-btn-color:#37858e;
    --edit-btn-color:#52b5f8 ;
    --delete-btn-color:#ff4040;
    --bulk-btn-color:#9c0404;
    --Import-btn-color:#d16601;
    /* ====== Transition ====== */
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
    
}

body{
    min-height: 100vh;
    background-color: var(--body-color);
    transition: var(--tran-05);
}

::selection{
    background-color: var(--primary-color);
    color: #fff;
}

body.dark{
    --body-color: #18191a;
    --model-color: #374151 ;
    --sidebar-color: #242526;
    --primary-color: #3a3b3c;
    --primary-color-light: #3a3b3c;
    --toggle-color: #fff;
    --text-color: #ccc;
    --btn-color: #000;
    --tablebody-color:#f49ab5;
    --add-btn-color:#2b442b;
    --submit-btn-color:#409076;
    --view-btn-color:#6ce3b3;
    --proceed-btn-color:#64a7ae;
    --edit-btn-color:#99d0f5 ;
    --delete-btn-color:#ff9b9b;
    --bulk-btn-color:#831414;
    --Import-btn-color:#BA7E30;
}

/* ===== Sidebar ===== */
 .sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 300px;
    padding: 8px 14px;
    background: #063c51 ;
    transition: var(--tran-05);
    z-index: 1;  
}
.sidebar.close{
    width: 88px;
}

/* ===== Reusable code - Here ===== */
.sidebar li{
    height: 45px;
    list-style: none;
    display: flex;
    align-items: center;
    margin-bottom: 12px;
}

.sidebar header .image,
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
}

.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.sidebar .text,
.sidebar .icon{
    color: var(--text-color);
    transition: var(--tran-03);
}

.sidebar .text{
    font-size: 17px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;
}
.sidebar.close .text{
    opacity: 0;
}
/* =========================== */

.sidebar header{
    position: relative;
}

.sidebar header .image-text{
    display: flex;
    align-items: center;
}
.sidebar header .logo-text{
    display: flex;
    flex-direction: column;
}
header .image-text .name {
    margin-top: 2px;
    font-size: 18px;
    font-weight: 600;
}

header .image-text .profession{
    font-size: 16px;
    margin-top: -2px;
    display: block;
}

.sidebar header .image{
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar header .image img{
    width: 50px;
    border-radius: 6px;
}

.sidebar header .toggle{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color:#025b79;
    color: var(--sidebar-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: var(--tran-05);
}

body.dark .sidebar header .toggle{
    color: var(--text-color);
}

.sidebar.close .toggle{
    transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu{
    margin-top: 15px;
}

.sidebar li.search-box{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    cursor: pointer;
    transition: var(--tran-05);
}

.sidebar li.search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    background-color: var(--primary-color-light);
    color: var(--text-color);
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    transition: var(--tran-05);
}
.sidebar li a{
    list-style: none;
    height: 100%;
    background-color: transparent;
    display: flex;
    align-items: center;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    text-decoration: none;
    transition: var(--tran-03);
}

.sidebar li a:hover{
    background-color: gray;
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text{
    color: var(--text-color);
}

.sidebar .menu-bar{
    height: calc(100% - 55px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar{
    display: none;
}
.sidebar .menu-bar .mode{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    position: relative;
    transition: var(--tran-05);
}

.menu-bar .mode .sun-moon{
    height: 50px;
    width: 60px;
}

.mode .sun-moon i{
    position: absolute;
}
.mode .sun-moon i.sun{
    opacity: 0;
}
body.dark .mode .sun-moon i.sun{
    opacity: 1;
}
body.dark .mode .sun-moon i.moon{
    opacity: 0;
}

.menu-bar .bottom-content .toggle-switch{
    position: absolute;
    right: 0;
    height: 100%;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}
.toggle-switch .switch{
    position: relative;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: #063c51;
    transition: var(--tran-05);
}

.switch::before{
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background-color: var(--sidebar-color);
    transition: var(--tran-04);
}

body.dark .switch::before{
    left: 20px;
}

.home{
    position: absolute;
    top: 0;
    top: 0;
    left: 300px;
    height: 100vh;
    width: calc(100% - 300px);
    background-color: var(--body-color);
    transition: var(--tran-05);
}
.home .text{
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 0;
}

.sidebar.close ~ .home{
    left: 88px;
    height: 100vh;
    width: calc(100% - 88px);
}
body.dark .home .text{
    color: var(--text-color);
}
.bord-head{
    color: var(--btn-color);
}
.table-nav{
    background-color: var(--tablebody-color);
    
}
tr,th{
    color: var(--text-color);   
}
tr,td{
    color: var(--text-color);
}
.add-btn{
   background-color: var(--add-btn-color);
    color: var(--btn-color);
}
.Import-btn{background-color: var(--Import-btn-color);
    color: var(--btn-color);}
.submit-btn{
    background-color: var(--submit-btn-color);
    color: var(--btn-color);
}
.view-btn{
    background-color: var(--view-btn-color);
    color: var(--btn-color);
}
.proceed-btn{
    background-color: var(--proceed-btn-color);
    color: var(--btn-color);
}
.delete-btn{
    color: var(--delete-btn-color);
}
.cancel-btn{
    background-color: var(--delete-btn-color);
  
}
.bulk-btn{
    background-color: var(--bulk-btn-color);
    color: var(--btn-color);
}
.cancel-btn::placeholder{ color: var(--btn-color);}
.edit-btn{
    color: var(--edit-btn-color); 
}
.nav-link .active{
    background-color: gray;
    
}
.nav-link .active .icon, .nav-link .active .text{
    color: var(--sidebar-color);
}
label{color: var(--text-color);}


    /* --------modal css=------ */

  
 
  /* Modal Content */
  .modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: var(--model-color);
    margin: auto;
    padding: 2px;
    z-index: 200000;
  }
  
  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  


    </style>
    
</head>
<body>
  
    @php
        $Categories=\App\Models\Category::all();
    @endphp
    <nav class="sidebar close">
        <header >
            <div class="image-text ">
                <span class="image">
                    <a href="{{asset('home')}}"><img src="images/logo2.png" alt=""></a>
                </span>
    
                <div class="text logo-text">
                    <span class="name">Jewelry Dashboard </span>
                   
                </div>
                <button><i class='bx bx-chevron-right toggle'></i></button>
            </div>
    
            
        </header>
        
        <div class="menu-bar ">
            <div class="menu  ">
                <ul>
                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <input id="myInput" type="text" placeholder="Search..." onkeyup="myFunction()">
                    </li>
                </ul>
    
                <ul class="menu-links" id="myUL">
                    <li class="nav-link">
                        <a class="{{ (request()->is('admin')) ? 'active' : '' }}"  href="admin" title="Dashboard">
                            <i class="fa-solid fa-house-user icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
    
                    <li class="nav-link">
                        <a class="{{ (request()->is('customer-list')) ? 'active' : '' }}" href="{{asset('customer-list')}}" title="Customer List">
                            <i class="fa-solid fa-users icon"></i>
                            <span class="text nav-text">Customer List</span>
                        </a>
                    </li>
    
                    <li class="nav-link">
                        <a class="{{ (request()->is('orders')) ? 'active' : '' }}" href="{{asset('orders')}}" title="Orders">
                            <i class="fa-solid fa-cart-shopping icon"></i>
                            <span class="text nav-text">Orders</span>
                        </a>
                    </li>
    
                    <li class="nav-link">
                        <a class="{{ (request()->is('role')) ? 'active' : '' }}" href="{{asset('role')}}" title="Role">
                            <i class="fa-solid fa-users-gear icon"></i>
                            <span class="text nav-text">Role</span>
                        </a>
                    </li>
                     <li class="nav-link">
                        <a class="{{ (request()->is('kitcos')) ? 'active' : '' }}" href="{{asset('kitcos')}}" title="Kitcos">
                            <i class="fa-solid fa-users-gear icon"></i>
                            <span class="text nav-text">Kitcos</span>
                        </a>
                    </li>
    
    
                    <li class="nav-link">
                        <a class="{{ (request()->is('category')) ? 'active' : '' }}" href="{{asset('category')}}" title="Category">
                            <i class="fas fa-th-large  icon"></i>
                            <span class="text nav-text">Category</span>
                        </a>
                    </li>
    
                    <li class="nav-link">
                        <a class="{{ (request()->is('category-type')) ? 'active' : '' }}" href="{{asset('category-type')}}" title="Category Type">
                            <i class="fas fa-th icon"></i>
                            <span class="text nav-text">Category Type</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('subcategory')) ? 'active' : '' }}" href="{{asset('subcategory')}}" title="Subcategory">
                            <i class="fas fa-th-large icon"></i>
                            <span class="text nav-text">Subcategory</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('category-product')) ? 'active' : '' }}" href="{{asset('category-product')}}" title="Category Product">
                            <i class="fas fa-border-all icon"></i>
                            <span class="text nav-text">Category Product</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('products')) ? 'active' : '' }}" href="{{asset('products')}}" title="Products">
                            <i class="fa-solid fa-cart-arrow-down icon"></i>
                            <span class="text nav-text">Products</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('metal')) ? 'active' : '' }}" href="{{asset('metal')}}" title="Metals">
                            <i class="fas fa-coins icon"></i>
                            <span class="text nav-text">Metals</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('metal-purity')) ? 'active' : '' }}" href="{{asset('metal-purity')}}" title="Metal Purity">
                            <i class="fas fa-coins icon"></i>
                            <span class="text nav-text "> Metal Purity</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('')) ? 'active' : '' }}" href="{{asset('')}}" title="Metal Product">
                            <i class="fas fa-coins icon"></i>
                            <span class="text nav-text">Metal Product</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a class="{{ (request()->is('silvertype')) ? 'active' : '' }}" href="{{asset('silvertype')}}" title="Silver Type">
                            <i class="fas fa-coins icon"></i>
                            <span class="text nav-text">Silver Type</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('silver_purity')) ? 'active' : '' }}" href="{{asset('silver_purity')}}" title="Silver Purity">
                            <i class="fas fa-coins icon"></i>
                            <span class="text nav-text">Silver Purity</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('platinum')) ? 'active' : '' }}" href="{{asset('platinum')}}" title="Platinum Type">
                            <i class="fas fa-coins icon"></i>
                            <span class="text nav-text">Platinum Type</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('platinum_purity')) ? 'active' : '' }}" href="{{asset('platinum_purity')}}" title="Platinum Purity">
                            <i class="fas fa-coins icon"></i>
                            <span class="text nav-text">Platinum Purity</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a class="{{ (request()->is('ring-size')) ? 'active' : '' }}" href="{{asset('ring-size')}}" title="Ring Size">
                            <i class="fas fa-ring icon"></i>
                            <span class="text nav-text">Ring Size</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('diamond-quality')) ? 'active' : '' }}" href="{{asset('diamond-quality')}}" title="Diamond Quality">
                            <i class="far fa-gem icon"></i>
                            <span class="text nav-text ">Diamond Quality</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('diamond_shape')) ? 'active' : '' }}" href="{{asset('diamond_shape')}}" title="Diamond Shape">
                            <i class="far fa-gem icon"></i>
                            <span class="text nav-text ">Diamond Shape</span>
                        </a>
                    </li>  
                    <li class="nav-link">
                        <a class="{{ (request()->is('diamond_cuts')) ? 'active' : '' }}" href="{{asset('diamond_cuts')}}" title="Diamond Cuts">
                            <i class="far fa-gem icon"></i>
                            <span class="text nav-text ">Diamond Cuts</span>
                        </a>
                    </li> 
                    <li class="nav-link">
                        <a class="{{ (request()->is('Color_stone')) ? 'active' : '' }}" href="{{asset('Color_stone')}}" title="Color Stone Shapes">
                            <i class="fa-solid fa-gem icon"></i>
                            <span class="text nav-text ">Color Stone Shapes</span>
                        </a>
                    </li>  
                    <li class="nav-link">
                        <a class="{{ (request()->is('color_stone_quality')) ? 'active' : '' }}" href="{{asset('color_stone_quality')}}" title="Color Stone Quality">
                            <i class="fa-solid fa-gem icon"></i>
                            <span class="text nav-text ">Color Stone Quality</span>
                        </a>
                    </li>               
                    <li class="nav-link">
                        <a class="{{ (request()->is('banner')) ? 'active' : '' }}" href="{{asset('banner')}}" title="Top Banner">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Top Banner</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('Rotational-button')) ? 'active' : '' }}" href="{{asset('Rotational-button')}}" title="Rotational Button">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Rotational Button</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('Gallery-filter')) ? 'active' : '' }}" href="{{asset('Gallery-filter')}}" title="Gallery filter">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Gallery filter</span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a class="{{ (request()->is('categorygallery')) ? 'active' : '' }}" href="{{asset('categorygallery')}}" title="Category Gallery">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Category Gallery</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('swiper-slider')) ? 'active' : '' }}" href="{{asset('swiper-slider')}}" title="Swiper Slider">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Swiper Slider</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('spotlightcollection')) ? 'active' : '' }}" href="{{asset('spotlightcollection')}}" title="Spotlight Collection">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Spotlight Collection</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('bottom-banner')) ? 'active' : '' }}" href="{{asset('bottom-banner')}}" title="Bottom Banner">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Bottom Banner</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('Celebration')) ? 'active' : '' }}" href="{{asset('Celebration')}}" title="Celebrations Rings">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Celebrations Rings</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('home_heading_content')) ? 'active' : '' }}" href="{{asset('home_heading_content')}}" title="Home page Headings/Cuntent">
                            <i class="fa-solid fa-image icon"></i>
                            <span class="text nav-text">Home page Headings/Cuntent</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="{{ (request()->is('contact_details')) ? 'active' : '' }}" href="{{asset('contact_details')}}" title="Contact Details">
                            <i class="fa-solid fa-phone-volume icon"></i>
                            <span class="text nav-text">Contact Details</span>
                        </a>
                    </li>
    
                </ul>
            </div>
    
            <div class="bottom-content">
                <li class="">
                    <a href="#" title="Logout">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
    
                <li class="mode" title="Dark mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>
    
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>
    
    </nav>





    <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        </script>









    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>





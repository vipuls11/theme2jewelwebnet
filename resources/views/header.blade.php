<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
 
    <style>
        /* ––––––––––––––––––––––––––––––––––––––––––––––––––
    Based on: https://codepen.io/nickelse/pen/YGPJQG
    Influenced by: https://sproutsocial.com/
  –––––––––––––––––––––––––––––––––––––––––––––––––– */


        /* #Mega Menu Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .mega-menu {
            display: none;
            left: -57px;
            position: absolute;
            text-align: left;
            width: 110%;

        }



        /* #hoverable Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
       
       

        /* .hoverable>a:after {
      content: "\25BC";
      font-size: 10px;
      padding-left: 6px;
      position: relative;
      top: -1px;
    } */

        .hoverable:hover .mega-menu {
            display: block;
        }


        /* #toggle Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .toggleable>label:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .toggle-input {
            display: none;
        }

        .toggle-input:not(checked)~.mega-menu {
            display: none;
        }

        .toggle-input:checked~.mega-menu {
            display: block;
        }

        .toggle-input:checked+label {
            color: white;
            background: #2c5282;
            /*@apply bg-blue-800 */
        }

        .toggle-input:checked~label:after {
            content: "\25B2";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        * {
            font-family: ;
        }

        .topheader {
            font-size: 16px;
        }

        .effect:hover {
            color: #b58038;
        }

        .displaycard {
            display: none;
        }

        .showlogin:hover+.displaycard,
        .displaycard:hover {
            display: block;
        }

        .togmenu {
            display: none;
        }

        .btn-login {
            border: none;
            border-radius: 50px;
            color: #000;
            box-shadow: 10px 10px 10px -1px rgba(240, 11, 30, 0.15), -10px -10px 10px -1px rgba(250, 115, 126, 0.15);
        }

        .login {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #loginpage,
        #createpage {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 20000000;


        }

        .create {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* -----search-------- */

        span.deleteicon {
            position: relative;
            display: inline-flex;
            align-items: center;
        }

        span.deleteicon span {
            position: absolute;
            display: block;
            right: 7px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            color: #fff;
            background-color: #ccc;
            font: 13px monospace;
            text-align: center;
            line-height: 1em;
            cursor: pointer;

        }

        span.deleteicon input {
            padding-right: 28px;
            box-sizing: border-box;

        }

        /* ---------------under line------------ */

        .active1::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            left: 0;
            bottom: 0;
            background: linear-gradient(to left, #ff9900 0%, #cc66ff 100%);
        }

        .under_line::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            left: 0;
            bottom: 0;
            background: linear-gradient(to left, #ff9900 0%, #cc66ff 100%);
            transform: scale(0, 1);
            transition: transform 0.7s ease;
        }

        .under_line:hover::after {
            transform: scale(1, 1);
        }


        .modal {
            animation: moveTobottom 1s ease-in-out;
            animation-delay: 10ms;
        }

        @keyframes moveTobottom {
            0% {
                transform: translateX(-400px);
            }

            100% {
                transform: translateX(0px);
            }
        }
    </style>
</head>


<!--Top Header-->
<div class="w-full flex bg-gray-100  px-4 justify-between ">

    <div class="flex  mb-1 lg:w-3/12 lg:flex md:flex md:w-full sm:w-full  items-center">
        <div class="mr-2 hidden lg:block md:block"><a href="tel:{{ $Contacts->contact_no }}"
                class="  topheader hover:text-golden " style="font-size: 12px"><i
                    class=" md:text-xs fa-solid fa-phone  "></i>&nbsp;{{ $Contacts->contact_no }}</a></div>
        <div class="hidden lg:block md:block"><a href="mailto:{{ $Contacts->email_id }}"
                class="  topheader   hover:text-golden " style="font-size: 12px"><i
                    class="md:text-xs fa-solid fa-envelope  "></i>&nbsp;{{ $Contacts->email_id }}</a></div>

        <div class="ml-2 mr-4 lg:hidden md:hidden"><a href="tel:{{ $Contacts->contact_no }}"
                class="  topheader hover:text-golden " style="font-size: 12px"><i
                    class=" md:text-xs fa-solid fa-phone  "></i></a></div>
        <div class=" lg:hidden md:hidden"><a href="mailto:{{ $Contacts->email_id }}"
                class="  topheader   hover:text-golden " style="font-size: 12px"><i
                    class="md:text-xs fa-solid fa-envelope  "></i></a></div>
    </div>
    <div class="  align-items-center  lg:visible  md:flex md:invisible  space-x-1 ml-2 w-2/5 topheader  mt-1  ">
        <marquee class="text-xs text-golden">Introducing jewelry Plan your purchase here</marquee>
    </div>
    <div class=" flex lg:w-4/12  md:flex md:w-full   items-center justify-end">
        <div class="flex hidden md:flex items-center ">
            {{-- <div class="w-full"><input type="text"
            class="mt-0.5 text-sm text-black border-1 border-golden py-1"
            placeholder="search here"><span
            class="  text-sm text-golden text-black  px-1  py-1 -ml-6 z-10" style=""><i
              class="fa-solid fa-magnifying-glass aboslute"></i></span>
        </div> --}}
            <div id="loginBtn" class="mr-5 font-normal text-sm relative cursor-pointer p-1 " onclick="openLogin()"
                style="font-size: 12px"><i class="fa-solid fa-user"></i> &nbsp; Login</div>

            {{-- -----------------login page start-------------- --}}


            <div id="loginpage" class="hidden">
                <div class="absolute  z-30 w-96 h-auto bg-[#feebe4] login">
                    <div class=" text-right text-2xl mr-4 mt-2  " onclick="closeLogin()"><i
                            class="fa-solid fa-xmark hover:bg-pink-200 px-2 cursor-pointer"></i></div>
                    <div class="px-10">
                        <div class="flex justify-between items-center   py-2">
                            <div class="text-xl">Log In</div>
                            <div class="font-medium cursor-pointer" onclick="openCreate()">Create New Account <i
                                    class="fa-solid fa-caret-right text-sm"></i></div>
                        </div>
                        <div class="">
                            <input class="w-full outline-none border border-gray-300 my-4 px-1 py-2" type="text"
                                name="" id="" placeholder="Email*">
                            <input class="w-full outline-none border border-gray-300 my-4 px-1 py-2" type="text"
                                name="" id="" placeholder="Password*">
                        </div>
                        <a href="">
                            <h1 class="mb-4 text-sm">Forgot Password?</h1>
                        </a>
                        <button class="btn-login w-full bg-[#feebe4] hover:bg-white py-2 text-2xl ">Login</button>
                    </div>
                    <div class="flex justify-between bg-gray-300 mt-16 py-4 px-10 items-center">
                        <div class="text-sm ">
                            Don't have an account?
                        </div>
                        <div class=" font-medium">
                            <button onclick="openCreate()"> Register Now <i
                                    class="fa-solid fa-caret-right text-sm "></i></button>
                        </div>
                    </div>
                </div>
            </div>





            {{-- -----------------login page end-------------- --}}
            {{-- -----------------create page start-------------- --}}
            <div id="createpage" class="hidden">
                <div class="absolute  w-96 h-auto bg-[#feebe4] z-30  create">
                    <div class=" text-right text-2xl mr-4 mt-2 " onclick="closeCreate()"><i
                            class="fa-solid fa-xmark hover:bg-pink-200 px-2 cursor-pointer"></i></div>
                    <div class="px-10">
                        <div>Create New Account</div>
                        <div>
                            <input class="outline-none border border-gray-300 px-2 py-2 mt-4 w-full" type="text"
                                placeholder="Frist name*">
                            <input class="outline-none border border-gray-300 px-2 py-2 mt-4 w-full" type="text"
                                placeholder="Last name*">
                            <input class="outline-none border border-gray-300 px-2 py-2 mt-4 w-full" type="text"
                                placeholder="Email*">
                            <input class="outline-none border border-gray-300 px-2 py-2 mt-4 w-full" type="text"
                                placeholder="Password*">
                            <input class="outline-none border border-gray-300 px-2 py-2 mt-4 w-full" type="text"
                                placeholder="Conform Password*">
                            <button
                                class="btn-login mt-10 mb-8 w-full bg-[#feebe4] hover:bg-white py-2 text-2xl ">Register</button>
                        </div>
                    </div>
                    <div class="flex justify-between bg-gray-300 mt-10 py-4 px-10 items-center">
                        <p class="text-sm">Already have an account?</p>
                        <button onclick="openLogin()"> Login<i class="fa-solid fa-caret-right text-sm pl-1"></i>
                        </button>
                    </div>

                </div>
            </div>

            {{-- -----------------create page end-------------- --}}

            <div class="font-normal text-sm mr-5 relative" style="font-size: 12px"><a href="{{ asset('/wish') }}">
                    <i class="fa-solid fa-heart"></i> &nbsp; My Wish</a>
                
                @if(session()->has('wish'))
                  @if(count(session()->get('wish'))>0)
                      <div  class="absolute top-0 left-1 text-xs  flex items-center justify-center   p-1 h-3 w-3 text-white bg-blue-600 rounded-full">
                        {{count(session()->get('wish'))}}                          
                      </div>
                  @endif
                @endif
            </div>

            <div class="font-normal text-sm relative" style="font-size: 12px"><a href="{{ asset('/cart') }}"><i
                        class="fa-solid fa-cart-shopping"></i> &nbsp; My Cart</a>
                    @if(session()->has('cart'))
                      @if(count(session()->get('cart'))>0)
                        <div class="absolute top-0 left-2 text-xs  flex items-center justify-center   p-1 h-3 w-3 text-white bg-blue-600 rounded-full">               
                          {{count(session()->get('cart'))}}                         
                        </div>
                      @endif
                    @endif
                    </div>
        </div>
        <div class="lg:hidden md:hidden flex items-center ">
            <button class="serch mr-2 text-sm text-black lg:hidden"><i
                    class="fa-solid fa-magnifying-glass  "></i></button>
            <div id="loginBtn" class="mr-2 font-normal text-sm relative cursor-pointer p-1 " onclick="openLogin()"
                style="font-size: 12px"><i class="fa-solid fa-user"></i></div>
            <div class="font-normal text-sm mr-2  relative" style="font-size: 12px"><a href="{{ asset('/wish') }}"><i
                        class="fa-solid fa-heart"></i> </a>
                        <div
                    class="absolute top-0 left-1 text-xs  flex items-center justify-center   p-1 h-3 w-3 text-white bg-blue-600 rounded-full">
                    @if(session()->has('wish'))
                        {{count(session()->get('wish'))}}
                          @else
                                0
                          @endif
                </div>
            </div>
            <div class="mr-2 font-normal text-sm relative" style="font-size: 12px"><a href="{{ asset('/cart') }}"><i
                  class="fa-solid fa-cart-shopping"></i></a>
                  <div
                    class="absolute top-0 left-2 text-xs  flex items-center justify-center   p-1 h-3 w-3 text-white bg-blue-600 rounded-full">
                     @if(session()->has('cart'))
                        {{count(session()->get('cart'))}}
                          @else
                                0
                          @endif
                  </div>
            </div>
        </div>

        {{-- 
      <div class="">
        <div class="showlogin"><i class='fas fa-user-circle  mt-1' style='font-size:20px;'></i></div>
       <div class="w-30 space-between bg-white absolute z-20 text-golden font-semibold displaycard ">
          <ul>
            <li><i class='fas fa-user-circle ml-11 my-2' style='font-size:30px;'></i></li>
            <li><a href="{{asset('login')}}" class="mr-2 p-2"> LogIn</a><a class="mr-2 " href="/logout">LogOut</a></li>

          </ul>
        </div> --}}
        {{-- sivam <div class="w-36  bg-white absolute right-2 z-20 text-golden font-semibold displaycard ">
          <ul>
            <li><i class='fas fa-user-circle ml-12  my-1 hover:text-golden ' style='font-size:30px;'></i></li>
            @if (Route::has('login'))
            @auth
            <li>
             
              @if (Auth::user()->role_id == 1)
              <a href="{{ url('/admin') }}" class="text-sm text-gray-700  hover:text-golden dark:text-gray-500 underline p-2">Admin</a>
              @elseif(Auth::user()->role_id==2)
              <a href="{{ url('/customer_dashboard') }}" class="text-sm text-gray-700  hover:text-golden dark:text-gray-500 underline p-1 mx-4">My Account</a><br>

              <a href="{{ url('/order/myorder') }}" class="text-sm text-gray-700  hover:text-golden dark:text-gray-500 underline p-1">My Orders</a>
              @endif
               <a href="{{ url('/logout') }}" class="text-sm text-gray-700 dark:text-gray-500 hover:text-golden underline p-1">Logout</a>
            </li>

            @else
            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline hover:text-golden p-2">Log in</a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}"
                class=" text-sm text-gray-700 dark:text-gray-500 underline p-2 hover:text-golden">Register</a>
            </li>
            @endif

            @endauth
            @endif
          </ul>
        </div> 
      </div>
--}}

        {{-- sivam @if (session()->has('wish') && count(session()->get('wish')) > 0)

      <a href="{{asset('wishlist')}}" class="ml-3 "><i class="fas fa-heart text-golden hover:text-golden mt-1"
          style='font-size:20px'></i></a>
      <sup class="mt-3 font-semibold font-300">
        @php
        $wishcount=null;
        $wishcount= count(session()->get('wish'));
        echo $wishcount;
        @endphp
      </sup>
      @else
      <a href="{{asset('wishlist')}}"><i class="fa-regular fa-heart ml-3 mt-1 hover:text-golden" style='font-size:23px'></i></a>
      @endif
      <a href="{{asset('cart')}}"><i class="fa fa-regular fa-cart-shopping  ml-3 mt-0.5 align-self-center hover:text-golden" style='font-size:20px'
          aria-hidden="true"></i></a>
      <sup class="mt-3 font-semibold font-300">
        @php

        if(session()->has('cart')){
        $cartcount=null;
        $cartcount= count(session()->get('cart'));
        echo $cartcount;
        }
        @endphp --}}
        {{-- </sup> --}}
    </div>

</div>

<!--Nav Menu header-->
<nav class="relative  bg-[#feebe4] text-golden head-golden z-20  top-0 sticky ">
    <div
        class=" md:w-full px-4 mx-auto flex  justify-between items-center relative  justify-center text-center  lg:block">
        <div class="w-full md:justify-between">
            <div class="z-0"><a href="{{ asset('/') }}"><img src="{{ asset('images/newlogo.png') }}"
                        class=" absolute w-20 lg:w-28"></a>
            </div>
            {{-- <div class="z-0"><a href="{{ asset('/') }}"><img src="{{ asset('images/logo.jpeg') }}"
                        style="border-radius: 50%;width:80px;" class=" absolute bg-white  rounded-full"></a>
            </div> --}}
            {{-- <div><a href="" class=":hidden"><img src="{{asset(" images/jewel_factory_logo.png")}}" class=""
              style="width:100px;height:50px;"></a></div> --}}

            <div class="  md:w-10/12  justify-between items-center ml-auto">
                <ul class="  flex justify-end items-center text-nowrap">

                    <!--Regular Link-->

                    <!--Toggleable Link-->
                    {{-- <li class="toggleable hover:bg-blue-800 hover:text-white">
              <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
              <label for="toggle-one"
                class="block cursor-pointer py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Click</label>
              <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Heading 1</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Heading 2</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-bold text-xl text-white text-bold">Heading 3</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One
                        Sublink</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Heading 4</h3>
                    <li class="pt-3">
                      <img src="https://placehold.it/205x172">
                    </li>
                  </ul>
                </div>
              </div>
            </li>  --}}

                    <!-- ## Toggleable Link Template ##
      
        <li class="toggleable"><input type="checkbox" value="selected" id="toggle-xxx" class="toggle-input"><label for="toggle-xxx" class="cursor-pointer">Click</label><div role="toggle" class="mega-menu">
        Add your mega menu content
        </div></li>
        
        -->

                    <!--Hoverable Link-->
                    {{-- sivam
            @foreach ($Categories as $category)
            <li class="hoverable text-black">
              <a href="{{asset('shop/'.$category->category_name)}}"
                class="relative block py-2 px-4 lg:p-6 text-sm lg:text-base effect hover:text-white">{{$category->category_name}}</a>
              <div class="p-6 mega-menu w-full  mb-16 sm:mb-0 shadow-xl bg-white " style="word-break: keep-all">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black font-bold">
                    <h2 class="text-md">
                      <a
                        href="{{asset('shop/'.$category->category_name)}}">{{$category->category_name}}</a>
                    </h2>
                  </div>
                  @foreach ($category->categoryType as $ct)
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">
                        {{$ct->category_type}}
                      </h2>
                    </div>

                    @foreach ($ct->subCategories as $sc)
                    <div class="flex items-center">
                      <a href="#">
                     
                        <img src="{{asset('/storage/files/'.$sc->sc_filename)}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a
                          href="{{asset('/shop/'.$category->category_name.'/'.$ct->category_type.'/'.$sc->subcategory_name)}}"
                          class="effect">{{$sc->subcategory_name}}</a></h3>
                    </div>
                    @endforeach --}}
                    {{-- <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/fashion.jpg")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Fashion</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/casual.jpg")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Casual</a></h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/silver.jpg")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/platinum.jpg")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Platinum</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/bands.png")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Bands</a></h3>
                    </div> --}}

                    {{-- sivam <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 effect">Find out
                        more...</a>
                    </div>
                  </ul>
                  @endforeach --}}

                    {{-- <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2">
                      <h2 class="text-md uppercase underline">Shop By Metal</h2>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/gemstone.png")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gemstone</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"> <img src="{{asset(" images/solitaire.png")}}" class="h-8 mb-3 mr-3">
                        <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#"
                            class="effect">Solitaiers</a>
                        </h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/daimond.png")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Diamond</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/gold.png")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gold</a></h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/rosegold.png")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Rose Gold</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <a href="#"><img src="{{asset(" images/silverr.png")}}" class="h-8 mb-3 mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>

                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By</h2>
                    </div>
                    <div class="flex items-center">
                      <img src="{{asset(" images/dot.png")}}" class="h-8 mb-3 mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Men</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <img src="{{asset(" images/dot.png")}}" class="h-8 mb-3 mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Women</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <img src="{{asset(" images/dot.png")}}" class="h-8 mb-3 mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Under ₹10k</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <img src="{{asset(" images/dot.png")}}" class="h-8 mb-3 mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹10k to
                          ₹20k</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <img src="{{asset(" images/dot.png")}}" class="h-8 mb-3 mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹20k to
                          ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center">
                      <img src="{{asset(" images/dot.png")}}" class="h-8 mb-3 mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Above ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul> --}}
                    {{-- sivam <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600">
                    <img src="{{asset("images/".$category->filename)}}">
                  </ul>
                </div>
              </div>
            </li>
            @endforeach --}}

                    @foreach ($Categories as $cate_data)
                        <li class="hoverable  text-black hidden lg:block">
                            <a href="{{ asset('shop/' . $cate_data->slug) }}"
                                class="relative {{ request()->is('shop/' . $cate_data->slug) ? 'active1 ' : '' }} under_line capitalize  block py-3 mx-3  px-1 text-sm lg:text-base effect hover:text-white">{{ $cate_data->category_name }}</a>
                            <div
                                class="p-3 mega-menu mb-16 sm:mb-0 shadow-xl bg-white border-t border-slate-300 drop-shadow-2xl ">
                                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2 ">
                                    <div class="w-full text-black font-bold pb-1 ">
                                        <h2 class="text-md capitalize">{{ $cate_data->slug }}</h2>
                                    </div>


                                    @foreach ($cate_data->CategoryType as $ct_data)
                                        <ul
                                            class="px-4 w-full  sm:w-1/2 lg:w-1/4  border-b sm:border-r lg:border-b-0 border-slate-300 pb-6 pt-6 lg:pt-3">
                                            <div class="w-full text-black mb-2 ">
                                                <h2 class="text-md capitalize  underline">
                                                    {{ $ct_data->category_type }}</h2>
                                            </div>
                                            @if (count($ct_data->Subcategory) > 0)
                                                @foreach ($ct_data->Subcategory as $subc_data)
                                                    <div class="flex items-center my-1">
                                                        <a href="#">
                                                            <img
                                                                src="{{ asset('storage/files/' . $subc_data->subcategory_image) }}"class="h-8 mr-3">
                                                        </a>
                                                        <h3 class=" text-sm text-black text-bold mb-2 capitalize ">
                                                            <a
                                                                href="{{ asset('/shop/'.$cate_data->slug.'/'.$ct_data->slug.'/'.$subc_data->slug) }}"class="effect  ">
                                                                {{ $subc_data->subcategory_name }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                @endforeach
                                            @endif
                                            {{-- <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/jhumkas.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 capitalize "><a href="#" class="effect">Jhumkas</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/drops.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Drops</a></h3>
                    </div>
                    <div class="flex items-center  my-1"> 
                      <a href="#"><img src="{{asset(" images/golden.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Golden
                          Earrings</a>
                      </h3>
                    </div>
                    <div class="flex items-center  my-1"> 
                      <a href="#"><img src="{{asset(" images/silver_earring.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver
                          Earrings</a>
                      </h3>
                    </div>
                    <div class="flex items-center  my-1"> 
                      <a href="#"><img src="{{asset(" images/pearl.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Pearl
                          Earrings</a>
                      </h3>
                    </div> --}}

                                            <div class="flex items-center py-3">
                                                <svg class="h-6 pr-3 fill-current text-blue-300"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                                </svg>
                                                <a href="#"
                                                    class="text-black bold border-b-2 border-blue-300 effect">
                                                    Find out more...
                                                </a>
                                            </div>
                                        </ul>
                                    @endforeach


                                    {{-- <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2">
                      <h2 class="text-md uppercase underline">Shop By Metal</h2>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/gemstone.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gemstone</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/solitaire.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Solitaiers</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/daimond.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Diamond</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/gold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gold</a></h3>
                    </div>
                    <div class="flex items-center  my-1">
                      <a href="#"><img src="{{asset(" images/rosegold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Rose Gold</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/silverr.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>

                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Men</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Women</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Under ₹10k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹10k to
                          ₹20k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹20k to
                          ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Above ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul> --}}
                                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 border-gray-600 text-center ">
                                        <div class="bg-slate-600  mb-2">
                                            <img src="{{ asset('storage/files/' . $cate_data->man_image) }}"
                                                style="width: 100%;">
                                            <span class="text-white">{{ $cate_data->image_title }}</span>
                                        </div>

                                        <div class=" bg-slate-600">
                                            <img src="{{ asset('storage/files/' . $cate_data->women_image) }}"
                                                style="width: 100%;">
                                            <span class="text-white">{{ $cate_data->image_titles }}</span>
                                        </div>

                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach


                    {{-- <li class="hoverable  text-black">
              <a href="#"
                class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-white">Earrings</a>
              <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black font-bold">
                    <h2 class="text-md">Earrings</h2>
                  </div>

                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By Style</h2>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/studs.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Studs</a></h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/jhumkas.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Jhumkas</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/drops.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Drops</a></h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/golden.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Golden
                          Earrings</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/silver_earring.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver
                          Earrings</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/pearl.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Pearl
                          Earrings</a>
                      </h3>
                    </div>

                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 effect">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2">
                      <h2 class="text-md uppercase underline">Shop By Metal</h2>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/gemstone.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gemstone</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/solitaire.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Solitaiers</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/daimond.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Diamond</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/gold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gold</a></h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/rosegold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Rose Gold</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1"> 
                      <a href="#"><img src="{{asset(" images/silverr.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>

                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Men</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Women</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Under ₹10k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹10k to
                          ₹20k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹20k to
                          ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Above ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600">
                    <img src="{{asset(" images/earrings3.jpg")}}">
                  </ul>
                </div>
              </div>
            </li>


            <li class="hoverable  text-black">
              <a href="#"
                class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-white">Bracelets</a>
              <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black font-bold">
                    <h2 class="text-md">Bracelets</h2>
                  </div>

                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By Style</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/chain_b.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Chain
                          Bracelets</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/flexible_b.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Flexible
                          Bracelets</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/kids_b.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Kids
                          Bracelets</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/oval_b.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Oval
                          Bracelets</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/mangalsutra_b.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Mangalsutra
                          Bracelets</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/silver_b.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver
                          Bracelets</a></h3>
                    </div>

                    <div class="flex items-center  py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 effect">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black  mb-2">
                      <h2 class="text-md uppercase underline">Shop By Metal</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gemstone.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gemstone</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"> <img src="{{asset(" images/solitaire.png")}}" class="h-8  mr-3">
                        <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#"
                            class="effect">Solitaiers</a>
                        </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/daimond.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Diamond</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gold</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/rosegold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Rose Gold</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/silverr.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>

                    <div class="flex items-center  py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black  mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Men</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Women</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Under ₹10k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹10k to
                          ₹20k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹20k to
                          ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Above ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center  py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600">
                    <img src="{{asset(" images/bracelets2.jpeg")}}">
                  </ul>
                </div>
              </div>
            </li>

            <li class="hoverable  text-black">
              <a href="#" class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-white">Necklace
                &
                Pendants</a>
              <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black font-bold">
                    <h2 class="text-md">Necklace & Pendants</h2>
                  </div>

                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By Style</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/choker.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Choker</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/pendant.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Pendants</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/necklace1.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Necklace</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/chain1.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Chains</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/casual_p.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Casual</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/charms.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Charms</a></h3>
                    </div>

                    <div class="flex items-center  my-1">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 effect">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2">
                      <h2 class="text-md uppercase underline">Shop By Metal</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gemstone.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gemstone</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"> <img src="{{asset(" images/solitaire.png")}}" class="h-8  mr-3">
                        <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#"
                            class="effect">Solitaiers</a>
                        </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/daimond.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Diamond</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gold</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/rosegold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Rose Gold</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/silverr.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>

                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Men</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Women</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Under ₹10k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹10k to
                          ₹20k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹20k to
                          ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Above ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600">
                    <img src="{{asset(" images/necklace3.jpg")}}">
                  </ul>
                </div>
              </div>
            </li> 

            <li class="hoverable  text-black">
              <a href="#"
                class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-white">Pendents</a>
              <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black mb-8 ">
                    <h2 class="font-bold text-2xl">Main Hero Message for the menu section</h2>
                    <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                  </div>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 1</h3>
                    </div>
                    <p class="text-black text-sm">Quarterly sales are at an all-time low create spaces to explore the
                      accountable talk and blind vampires.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 2</h3>
                    </div>
                    <p class="text-black text-sm">Prioritize these line items game-plan draw a line in the sand come up
                      with something buzzworthy UX upstream selling.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 3</h3>
                    </div>
                    <p class="text-black text-sm">This proposal is a win-win situation which will cause a stellar
                      paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 4</h3>
                    </div>
                    <p class="text-black text-sm">This is a no-brainer to wash your face, or we need to future-proof
                      this
                      high performance keywords granularity.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                </div>
              </div>
            </li>  --}}



                    <div id="searching" class="hidden lg:block md:block togserch">
                        <div class="relative ">
                            <button class=" absolute text-sm text-golden text-black  py-1.5   px-2 "
                                style=" z-index:1"><i class="fa-solid fa-magnifying-glass  "></i></button>
                            <input type="text"
                                class="border  outline-0 w-52 lg:w-60 text-sm font-light text-black  rounded-full py-1  px-7 deletable"placeholder="search here">

                        </div>
                    </div>


                    <div class=" lg:hidden">
                        <button class="ml-4 p-2"><i class="fa-solid fa-bars  mobmenu cursor-pointer"></i></button>
                    </div>
                </ul>


            </div>

        </div>

    </div>


</nav>
<!-- ## Hoverable Link Template ##
              
                <li class="hoverable hover:bg-blue-800 hover:text-white"><a href="#" class="relative block">x</a><div class="mega-menu">
                Add your mega menu content
                </div></li>
              
              -->
{{-- </ul>
                </div>
              </div>
            </div> --}}



<div class="lg:hidden ">
    <div class="text-left togmenu modal top-[68px] w-full md:w-full md:ml-auto absolute z-20 ">
        <ul class="shadow bg-white text-black ">
            @foreach ($Categories as $category)
                <li class=" text-black">
                    <button
                        class="text-left flex items-center  py-2 px-4 w-full submenu1 cursor-pointer  border-b border-gray-400 hover:bg-gray-400 hover:text-white"
                        value="{{ $category->id }}">
                        <a href="{{ asset('shop/' . $cate_data->category_name) }}"
                            class="relative text-sm lg:text-base effect hover:text-white submenus ">
                            {{ $category->category_name }}
                        </a><i class="fa-solid fa-caret-down hover:text-golden pl-1"></i>
                    </button>
                    @foreach ($category->CategoryType as $ct_data)
                        <div class="w-full px-2 text-black mb-2 hidden submenu2{{ $category->id }}">
                            <ul class=" ">
                                <li>
                                    <h2 class="text-xs my-1 px-4 font-semibold uppercase text-black">
                                        {{ $ct_data->category_type }}
                                    </h2>
                                    <ul>
                                        <div class="">
                                            @if (count($ct_data->Subcategory) > 0)
                                                @foreach ($ct_data->Subcategory as $subc_data)
                                                    <div class="flex items-center px-5 hover:bg-gray-300 ">
                                                        <a href="{{ asset('/shop/' . $category->category_name . '/' . $ct_data->category_type . '/' . $subc_data->subcategory_name) }}">

                                                            <img src="{{ asset('/storage/files/' . $subc_data->subcategory_image) }}"
                                                                class="h-4  mr-3 "></a>
                                                        <h3 class=" text-xs my-1 text-black text-bold uppercase "><a
                                                                href="{{ asset('/shop/' . $category->category_name . '/' . $ct_data->category_type . '/' . $subc_data->subcategory_name) }}"
                                                                class="effect">{{ $subc_data->subcategory_name }}</a>
                                                        </h3>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    @endforeach
                </li>
            @endforeach


        </ul>

    </div>
</div>

<script>
    $('.mobmenu').click(function() {
        $('.togmenu').toggle();
    });

    $('.submenu1').click(function() {

        let submenu = $(this).val()
        $('.submenu2' + submenu).toggle();
    });

    $('#submenu2').click(function() {
        $('.submenus2').toggle();
    });
</script>

{{-- -----------------login script- ------------- --}}
<script>
    // ---------search toggle-------
    $('.serch').click(function() {
        $('.togserch').toggle();
    });




    function openCreate() {
        document.getElementById("createpage").style.display = "block";
    }

    function closeCreate() {
        document.getElementById("createpage").style.display = "none";
    }
</script>



<script>
    // Get the modal
    var modal = document.getElementById("loginpage");

    // Get the button that opens the modal
    var btn = document.getElementById("loginBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closebtn")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    function closeLogin() {
        document.getElementById("loginpage").style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


{{-- ---------------search script--------------- --}}
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function() {
        $('input.deletable').wrap('<span class="deleteicon"></span>').after($('<span>x</span>').click(
            function() {
                $(this).prev('input').val('').trigger('change').focus();
            }));
    });
</script>

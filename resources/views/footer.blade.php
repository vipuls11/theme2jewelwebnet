<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- -----------------tailwind-------------- --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .line-footer li a:hover{color: rgb(1, 1, 104);}
        .line-footer li a{
            position: relative;
            
        }
     .line-footer li a::after{
    content: '';
    position: absolute;
    width: 100%;
    height: 1px;
    left: 0;
    bottom: -5px;
    background-color: #000;
    
    transform: scale(0, 1);
    transition: transform 0.7s ease;
    }
.line-footer li a:hover::after{transform: scale(1, 1);}



    </style>
</head>
<body>
    <div class="bg-[#feebe4]">
       <div class=" border-b border-red-500">
        <div class="container-1"> 
        <div class="flex flex-wrap justify-between items-center  ">
             <div class="py-4">
                 You’re invited! Join our mailing list to get 12% off your first order, new launches and more!
             </div>

             <div class="my-2 border-solid border border-red-500 bg-red-500 rounded-full">
                <input type="text" placeholder="Enter Your Email Address" class="rounded-full py-2 w-44 outline-none lg:w-72 md:w-72 px-3"><button class="foot-btn text-center text-white py-2 px-3 ">Sign Up<button>
            </div>             
        </div>
        </div>
    </div>
<div class="container-1">  
         
             <div class="py-4 grid lg:grid-cols-4 md:grid-cols-2 gap-4">
     
                 <div>
                     <h1 class="font-semibold">CUSTOMER SERVICE</h1>
                     <ul class=" mt-3 line-footer text-sm">
                         <li class="mb-2"><a href="">FAQs</a></li>
                         <li class="mb-2"><a href="">Track Your Order</a></li>
                         <li class="mb-2"><a href="">Returns & Exchange</a></li>
                         <li class="mb-2"><a href="">Resize & Repair</a></li>
                         <li><a href=""></a></li>
                     </ul>
                 </div>
     
                 <div>
                   <h1 class="font-semibold ">  ABOUT US</h1>
                   <ul class=" mt-3 line-footer text-sm">
                     <li class="mb-2"><a href="">About Jewelry</a></li>
                     <li class="mb-2"><a href="">Customer Reviews</a></li>
                     <li class="mb-2"><a href="">Jewelry Blog</a></li>
                     <li class="mb-2"><a href="">Jewelry in the Press</a></li>
                     <li><a href="">US Service Discount</a></li>
                 </ul>
                 </div>
     
                 <div>
                     <h1 class=" font-semibold">WHY JEWELRY?</h1>
                     <ul class=" mt-3 line-footer text-sm">
                         <li class="mb-2"><a href="">24/7 Customer Support</a></li>
                         <li class="mb-2"><a href="">Free Returns</a></li>
                         <li class="mb-2"><a href="">Free Shipping</a></li>
                         <li class="mb-2"><a href="">Payment Options</a></li>
                         <li class="mb-2"><a href="">Lifetime Warranty</a></li>
                         <li class="mb-2"><a href="">Privacy Policy</a></li>
                    
                     </ul>
                 </div>
     
                 <div>
                   <h1 class="font-semibold">  24/7 CUSTOMER SUPPORT</h1>
                   <ul class=" mt-3 line-footer text-sm">
                     <li class="mb-2"><a href="tel:{{$Contacts->contact_no}}"><i class="fa-solid fa-phone-flip"></i>&nbsp; {{$Contacts->contact_no}}</a></li>
                     <li class="mb-2"><a href="mailto:{{$Contacts->email_id}}"><i class="fa-solid fa-envelope"></i>&nbsp; {{$Contacts->email_id}}</a></li>
                     <li class="mb-2"><a href="">Jewelry Inc. Downtown Los Angeles</a></li>
                     <li class="mb-2">FOLLOW US ON</li>
                     <div class="flex">
                         <div class=" text-2xl mr-5 text-indigo-300"><i class="fa-brands fa-facebook"></i></div>
                         <div class=" text-2xl mr-5 text-indigo-300"><i class="fa-brands fa-twitter"></i></div>
                         <div class=" text-2xl mr-5 text-indigo-300"><i class="fa-brands fa-instagram"></i></div>
                         <div class=" text-2xl  text-indigo-300"><i class="fa-brands fa-linkedin"></i></div>
                     </div>
                 </ul>
                 </div>
             </div>
         </div>
     </div>
</body>
</html>
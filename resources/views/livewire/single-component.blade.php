<div>
@extends('app')
@section('content')
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('../src/jquery.exzoom.js')}}"></script>
        <link href="{{asset('../src/jquery.exzoom.css')}}" rel="stylesheet" type="text/css" />

       
<style>  
.related-pro::after{
    content: '';
    position: absolute;
    height: 2px;
    width: 50%;
    background-color: rgb(127, 43, 5);
    left: 50%;
    display: flex;
    text-align: center;
}
.related-pro::before{
    content: '';
    position: absolute;
    height: 2px;
    width: 50%;
    background-color: rgb(127, 43, 5);
    right: 50%;   
}

.left-sticky{
    position: -webkit-sticky;
    position: sticky;
    top: 0;
}
#clip {
  position: absolute;
  clip: rect(0, 100px, 200px, 0);
  /* clip: shape(top, right, bottom, left); NB 'rect' is the only available option */
}
.container-3{
        width: 80%;
        margin: auto;
    }
.productdetails{
        display: flex;
        justify-content: flex-start;
        overflow-x: auto;
    }
.productdetails::-webkit-scrollbar
    {
        width: 0;
    }
/* -- THE CSS  summary-- */
      
details summary::-webkit-details-marker {
                display: none;
            }

          
details[open] summary::after {
                content: "-";
            }

details[open] summary ~ * {
                animation: slideDown 0.3s ease-in-out;
            }

details[open] summary p {
                opacity: 0;
                animation-name: showContent;
                animation-duration: 0.6s;
                animation-delay: 0.2s;
                animation-fill-mode: forwards;
                margin: 0;
            }

            @keyframes showContent {
                from {
                opacity: 0;
                height: 0;
                }
                to {
                opacity: 1;
                height: auto;
                }
            }
            @keyframes slideDown {
                from {
                opacity: 0;
                height: 0;
                padding: 0;
                }

                to {
                opacity: 1;
                height: auto;
                }
            }
        
    /* -----------exzoom css---------- */
             #exzoom {
                width: 480px;               
            }
            .product_list_ul{
            position: relative;
            }
        .bvideo-wrap {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99999999999;
        transform: translate3d(0px, 0px, 0px);
        width: 100%;
        height: 100%;
        
        }
    .product_list_ul:hover .bvideo-wrap{
        display: block;
    }

</style>

    @php
        $Categ=\App\Models\Category::first();
    @endphp

    @if(session()->has('cart'))
            @foreach (session()->get('cart') as $item)
           @php
               $product = App\Models\Product::find($item);
                // $purity = App\Models\Metalpurity::find($item);
                //  dd($product);                          
          @endphp
          @endforeach
          @endif 

<div class="container-3">

<div class="pt-2 text-xs"><a href="{{asset('/')}}"> Home </a>/<a href="{{ asset('shop/' . $Categ->category_name) }}"> {{$Categ->category_name}}</a>/<a href="">product_name</a></div>
    <div class="md:flex lg:flex my-4">
        <div class="w-full md:w-6/12 lg:w-6/12 mr-2">
            <div class="left-sticky">      
            <div class="exzoom " id="exzoom">
                <div class="exzoom_img_box ">
                    <ul class='exzoom_img_ul d-flex'>
                        <li class=""><img src="{{asset('https://kamajewelry.com/public/storage/products2023/JRZ764410_RXF.jpg')}}" alt="" style="width: 100%; height:100%" /></li>
                        <li class=""><img src="{{asset('https://kamajewelry.com/public/storage/products2023/JRZ76451Q_WXF.jpg')}}" alt="" style="width: 100%; height:100%" /></li>
                        <li class=""><img src="{{asset('https://kamajewelry.com/public/storage/products2023/JRZ764610_YXF.jpg')}}" alt="" style="width: 100%; height:100%" /></li>
                        <li class=""><img src="{{asset('https://kamajewelry.com/public/storage/products2023/JRZ764810_YXF.jpg')}}" alt="" style="width: 100%; height:100%" /></li>
                        <li class=""><img src="{{asset('https://vdjewel.com/wp-content/uploads/2023/05/RE51153WXDDVD.jpg')}}" alt="" style="width: 100%; height:100%" /></li>
                        <li class=""><img src="{{asset('https://vdjewel.com/wp-content/uploads/2023/05/PE51151WXDDVD.jpg')}}" alt="" style="width: 100%; height:100%" /></li>
                        <li class="btnfornext"><img src="{{asset('images/Wedding Rings.jpg')}}" style="width: 100%; height:100%;"  /></li>
                        <li class=" product_list_ul"><img src="{{asset('images/video_icon.png')}}" style="width: 100%; height:100%;" />
                            <div class="bvideo-wrap "  >
                                <video  poster="{{asset('https://www.kamajewelry.com/public/assets/img/logo/main_logo.png')}}}}" loop controls muted autoplay> 
                                    {{-- <source src='{{asset('https://kinvid1.bluestone.com/output/mp4/BINK0421R16-VIDEO-28807.mp4/BINK0421R16-VIDEO-28807.mp4')}}' type='video/mp4'>  --}}
                                    <source src='{{asset('images/JAE06220Q_1_yo.mp4')}}' type='video/mp4'> 
                                </video>
                            </div> 
                        </li>
                    
                    </ul>
                            <div style="position:absolute; top:45%; left:-30px; font-size:40px; padding:8px; cursor:pointer; background-color:#fff;">
                                <span class=" exzoom_prev_btn" > &#129168; </span>
                            </div>
                            <div style="position:absolute; top:45%; right:-30px; font-size:40px; padding:8px; cursor:pointer;background-color:#fff;">
                                <span class=" exzoom_next_btn" > &#129170; </span>
                            </div>
                </div>
                <div class="exzoom_nav"></div>
                {{-- <p class="exzoom_btn">
                    <a href="javascript:void(0);" class="exzoom_prev_btn">
                        &#129168; </a>
                            <a href="javascript:void(0);" class="exzoom_next_btn"> &#129170; </a>
                </p> --}}
            </div>
          

            </div>
        </div>




    <div class="w-full md:w-6/12 lg:w-6/12">
        <div class="border px-12">
            <h1 class="text-xl py-2">Product Name : Solitaire Blue Sapphire Infinity Knot Ring</h1>
            <span >(SKU #: SR0955OSD)</span>
            <h1 class="py-2">Total Price Rs : 16000</h1>
            <div class="my-2">
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <h1 class="my-4 text-xl">Gemstone Quality: Best</h1>
            <div class="flex justify-start productdetails">
                <div class="  text-center mx-2">
                    <div class="h-16 w-16 hover:border border-indigo-200 p-1">
                        <img src="images/diamond.jpg" alt="" style="width: 100%; height:100%">
                    </div>
                    <div class="h-auto">
                        <p class="py-1   text-sm">Good</p>
                    </div>
                </div>

                <div class="  text-center mx-2">
                    <div class="h-16 w-16 hover:border border-indigo-200 p-1">
                        <img src="images/diamond.jpg" alt="" style="width: 100%; height:100%">
                    </div>
                    <div class="h-auto">
                        <p class="py-1   text-sm">Better</p>
                    </div>
                </div>
                <div class="  text-center mx-2">
                    <div class="h-16 w-16 hover:border border-indigo-200 p-1">
                        <img src="images/diamond.jpg" alt="" style="width: 100%; height:100%">
                    </div>
                    <div class="h-auto">
                        <p class="py-1   text-sm">Best</p>
                    </div>
                </div>
                <div class="  text-center mx-2">
                    <div class="h-16 w-16 hover:border border-indigo-200 p-1">
                        <img src="images/diamond.jpg" alt="" style="width: 100%; height:100%">
                    </div>
                    <div class="h-auto">
                        <p class="py-1   text-sm">Heirloom</p>
                    </div>
                </div>
                
            </div>

            <h1 class="my-4 text-xl">Total Carat Weight: 1.10 carats</h1>
            <div class="flex justify-start productdetails">

                <div class=" text-center mx-2">
                    <div class="h-16 w-16 hover:border border-indigo-200 p-1">
                        <img src="images/ring.jpg" alt="" style="width: 100%; height:100%">
                    </div>
                    <div class="h-auto">
                        <p class="py-1   text-sm">Good</p>
                    </div>
                </div>
                <div class=" text-center mx-2">
                    <div class="h-16 w-16 hover:border border-indigo-200 p-1">
                        <img src="images/ring.jpg" alt="" style="width: 100%; height:100%">
                    </div>
                    <div class="h-auto">
                        <p class="py-1   text-sm">Better</p>
                    </div>
                </div>
                <div class=" text-center mx-2">
                    <div class="h-16 w-16 hover:border border-indigo-200 p-1">
                        <img src="images/ring.jpg" alt="" style="width: 100%; height:100%">
                    </div>
                    <div class="h-auto">
                        <p class="py-1   text-sm">Best</p>
                    </div>
                </div>
                <div class=" text-center mx-2">
                    <div class="h-16 w-16 hover:border border-indigo-200 p-1">
                        <img src="images/ring.jpg" alt="" style="width: 100%; height:100%">
                    </div>
                    <div class="h-auto">
                        <p class="py-1   text-sm">Heirloom</p>
                    </div>
                </div>
               
            </div>

            <h1 class="py-4 text-xl">Metal Type: 18K White Gold</h1>
            <div class="flex">
                <div class=" mx-2 h-16 w-16 ml-5  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-1">
                        <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                            <p class="py-2 ">10KT</p>
                        </div>
                </div>
                <div class=" mx-2 h-16 w-16 ml-5  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-1">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="py-2 ">14KT</p>
                    </div>
                </div>

            </div>

            <h1 class="py-4 text-xl">Ring Size: 10.5</h1>

            <div class="flex py-2  overflow-x-scroll overscroll-y-none">
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">3</p>
                    </div>
                </div>
                
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">3.5</p>
                    </div>
                </div>
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">4</p>
                    </div>
                </div>
                
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">4.5</p>
                    </div>
                </div>
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">5</p>
                    </div>
                </div>
                
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">5.5</p>
                    </div>
                </div>
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">6</p>
                    </div>
                </div>
                
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">6.5</p>
                    </div>
                </div>
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">7</p>
                    </div>
                </div>
                
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">7.5</p>
                    </div>
                </div>
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">8</p>
                    </div>
                </div>
                
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">8.5</p>
                    </div>
                </div>
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">9</p>
                    </div>
                </div>
                
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">9.5</p>
                    </div>
                </div>
                <div class="mx-2 h-16 w-16  flex items-center  justify-center rounded-full  hover:border border-indigo-200 p-2">
                    <div class="h-12 w-12  bg-yellow-100 flex items-center  justify-center rounded-full"><hr>
                        <p class="p-2 ">10</p>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-4">
                <button class="py-2  bg-yellow-800 text-xl text-white w-full" wire:click="addtoCart({{$product_id}})" ><i class="fas fa-shopping-cart mr-2"></i>Add To Cart</button>
                {{-- <a class="py-2  bg-yellow-800 text-xl text-white" href="{{asset('cart')}}"><button class="w-full"><i class="fas fa-shopping-cart mr-2"></i>Add To Cart</button></a> --}}
            </div>

            </div>



            <div>

                <h1 class="text-xl my-4 px-2">Add Ons</h1>
               
            
            <!-- This is an example component -->
        <div class='flex items-center justify-center   bg-gradient-to-br'>
            <div class='w-full   mx-auto bg-white rounded-lg '>
            <!-- THE ACCORDION WITH <details> <summary> HTML Tag -->
            <details class="w-full bg-white border border-blue-500 cursor-pointer ">
                <summary class="w-full bg-white text-dark flex justify-between px-4 py-2 text-xl  after:content-['+']">Free Engraving</summary>
                
                    <div class="border px-5 " >
                        <div class=" ">
                            <img class="bg-bottom bg-no-repeat px-16" src="images/half-ring.png" alt="" style="width: 100%; height: 120px;">
                        </div>
    
                           
                        <input class="border w-full mb-1 mt-4 px-5 py-2 outline-none" type="text" placeholder="" maxlength="30">
                        <p class="text-right my-1">0/30</p>
                        <div class="text-center mb-4">
                            <button  class="border bg-gray-200 px-4 py-2 hover:bg-gray-400"><i>Aa</i></button> <button class="border bg-gray-200 px-4 py-2 hover:bg-gray-400">Aa</button>
                        </div>
                       
                        <p class="text-sm pb-4">Engraved Items are now eligible for exchange and returns</p>
                       </div>
                
            </details>
         
                </div>
            </div>
            </div>


                <div class="border mt-4 px-12 py-4 ">
                    <div class="">
                        <h1 class="text-xl py-2">Product Details</h1>
                        <p class="text-sm">At the core of a scintillating floral halo is an oval blue sapphire, held 
                            in a prong setting. This oval blue sapphire ring is inspired by 
                            Princess Diana's beautiful engagement ring. 
                            It is crafted in 14k white gold and bespeaks glamour and elegance.
                        </p>
                    </div>

                    <div>
                        <h1 class=" py-2">Product Specifications:-</h1>
                        <div class="flex justify-between text-sm">
                            <div>Metal:</div>
                            <div>18K Rose Gold</div>
                        </div>
                        <h1 class=" py-2">Diamond Information:-</h1>
                        <div class="flex justify-between text-sm">
                            <div>Number of Round Diamond:</div>
                            <div>1</div>
                        </div>

                        <div class="flex justify-between text-sm py-1">
                            <div>Inhancement:</div>
                            <div>None</div>
                        </div>

                        <div class="flex justify-between text-sm py-1">
                            <div>Diamond Total Weight (ct. tw.):</div>
                            <div>1/8</div>
                        </div>
                        <div class="flex justify-between text-sm py-1">
                            <div>Quality Grade:</div>
                            <div>H, SI2 </div>
                        </div>
                        <div class="flex justify-between text-sm py-1">
                            <div>Setting Type:</div>
                            <div>Prong</div>
                        </div>
                    </div>

                </div> 


                <div class="border px-12 py-4 mt-4">
                    <h1 class="py-2 text-xl">Free Shipping & Returns</h1>
                    <p class="text-sm"> Every Jewellery item is custom made after your order is placed. The estimated arrival
                        date is calculated based on the production time of your item. You can select the delivery date as per
                        your preference at the cart page. All items are fully insured.
                        For added security, an adult signature is required at the time of delivery.</p>
                </div>
       
        </div>

        
    </div>

</div>
    <div>
        <img src="images/4.jpg" alt="" style="width: 100%; height:auto;">
    </div>

    <div class="container-1 ">  
        <div class=" ">
            <p class=" py-10 relative text-center related-pro text-3xl">Similar Products</p>
        </div>

        <div class="text-center grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3   my-5">
            @if(count($recentproducts)>0)
            
            @foreach($recentproducts as $item)
                                @php
                         
                                    if(count($item->images)>0)
                                    {
                                        $url="storage/".$item->images->where('is_main',1)->first()->url ?? "";
                                    }
                                    else{
                                        $url="images/No-image-found.jpg"; 
                                    }
                                @endphp  
           
            <div class="shadow border rounded-xl bg-pink-100 relative">
                <div class="h-52 md:h-72 lg:h-72">
                    <a href="{{asset('single')}}"><img class="rounded-t-xl" src="{{asset($url)}}" alt="{{$item->sku}}" style="width: 100%; height:100%"></a>
                    <div class="absolute right-2 top-1 text-2xl text-pink-300"><i class="fa-regular fa-heart"></i></div>
                </div>
                
                <div class="h-auto">
                    <h1 class="py-1">{{$item->product_name}}</h1>
                    <p class="py-1">{{$item->total}}</p>
                </div>
            </div>
              @endforeach
            @else
                <div>No recent Products</div>
            @endif
          
{{--             
            <div class="shadow border rounded-xl bg-pink-100 relative">
                <div class="h-52 md:h-72 lg:h-72">
                    <a href="{{asset('single')}}"><img class="rounded-t-xl" src="images/Bracelet.jpg" alt="" style="width: 100%; height:100%"></a>
                    <div class="absolute right-2 top-1 text-2xl text-pink-300"><i class="fa-regular fa-heart"></i></div>
                </div>
                
                <div class="h-auto">
                    <h1 class="py-1">Necklace-1</h1>
                    <p class="py-1">Rs 18000.00</p>
                </div>
            </div>
            <div class="shadow border rounded-xl bg-pink-100 relative">
                <div class="h-52 md:h-72 lg:h-72">
                    <a href="{{asset('single')}}"><img class="rounded-t-xl" src="images/ring3.jpeg" alt="" style="width: 100%; height:100%"></a>
                    <div class="absolute right-2 top-1 text-2xl text-pink-300"><i class="fa-regular fa-heart"></i></div>
                </div>
                
                <div class="h-auto">
                    <h1 class="py-1">Necklace-1</h1>
                    <p class="py-1">Rs 18000.00</p>
                </div>
            </div>
            <div class="shadow border rounded-xl bg-pink-100 relative">
                <div class="h-52 md:h-72 lg:h-72">
                    <a href="{{asset('single')}}"><img class="rounded-t-xl" src="images/Bracelet.jpg" alt="" style="width: 100%; height:100%"></a>
                    <div class="absolute right-2 top-1 text-2xl text-pink-300"><i class="fa-regular fa-heart"></i></div>
                </div>
                
                <div class="h-auto">
                    <h1 class="py-1">Necklace-1</h1>
                    <p class="py-1">Rs 18000.00</p>
                </div>
            </div>      --}}

         
                              
        </div>

    </div>
  



   <script type="text/javascript">

            $('.container').imagesLoaded(function () {
                $("#exzoom").exzoom({
                    autoPlay: true,
                });
                $("#exzoom").removeClass('hidden')
            });

        </script>
              
@endsection
</div>

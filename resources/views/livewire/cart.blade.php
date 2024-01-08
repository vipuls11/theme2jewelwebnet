<div>
  
    <style>
        /* .wish-list::before {
            content: '';
            background-color: rgb(253, 118, 237);
            width: 32%;
            height: 2px;
            position: absolute;
            right: 0;
            top: 50%;
        }

        .wish-list::after {
            content: '';
            background-color: rgb(253, 118, 237);
            width: 32%;
            height: 2px;
            position: absolute;
            left: 0;
            top: 50%;
        } */

        .wish-list::after{
    content: '';
    position: absolute;
    height: 2px;
    width: 50%;
    background-color: rgb(127, 43, 5);
    left: 50%;
    display: flex;
    text-align: center;
    margin-top:4px; 
}
.wish-list::before{
    content: '';
    position: absolute;
    height: 2px;
    width: 50%;
    background-color: rgb(127, 43, 5);
    right: 50%; 
   
}

        .summery-menu {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
    </style>
    @php
      $Contacts=\App\Models\Contact::first();
    @endphp
    


    <div class="bg-gray-200 pb-4">
        <div class=" relative text-center py-10">
            <p class="wish-list text-4xl ">Your Shopping Cart</p>
        </div>
  
        <div class="container-1">
            <div class="">
      @if(session()->has('cart') && count(session()->get('cart'))>0)
                <div class="lg:flex  gap-4 ">
                    <div class="w-full lgw-7/12   p-4 border-r-2 bg-white mr-4 my-2">
                                  
                                        @foreach (session()->get('cart') as $item)
                                        @php
                                            $product = App\Models\Product::find($item);
                                            // $purity = App\Models\Metalpurity::find($item);
                                           
                                        @endphp
                        <div class="lg:flex ">
                           
                                    @php
                                        if(count($product->images)>0)
                                        {
                                            $url="storage/".$product->images->where('is_main',1)->first()->url ?? "";
                                        }
                                        else{
                                            $url="images/No-image-found.jpg"; 
                                        }
                                    @endphp 

                            <div class="mr-10 ">
                                <div class=" w-32 lg:w-60 border ">
                                    <img src="{{asset($url)}}" alt="" style="width: 100%; height:100%; ">
                                </div>
                                <div class=" flex justify-between my-4">
                                    <a href=""><button
                                            class="text-blue-500 text-sm px-2 py-1 rounded-full">Edit</button></a>
                                  
                                        <button
                                            class="text-yellow-500 text-sm px-2 py-1 rounded-full" wire:click="removetoCart({{$product->id}})">Remove</button>
                                            
                                    <button wire:click="movetoWish({{$product->id}})" class="text-green-500 text-sm px-2 py-1 rounded-full">Move To
                                            Wishlist</button>
                                </div>
                            </div>

                            <div class="w-full lg:w-10/12 ">
                                <div class="flex justify-between  items-center ">
                                    <div class="">
                                        <h1 class="py-1">Product Name : {{$product->product_name}}</h1>

                                    </div>
                                    <div>
                                        
                                        <div class="text-red-500">Rs : {{$product->total}}</div>
                                    </div>
                                </div>
                                <h1 class="mt-2 text-sm">SKU: JR03769-YGP900</h1>
                                <div class="mt-2 text-sm flex">
                                    <div class=" ">
                                        Size: {{$product->ring_size_id}}
                                    </div>
                                    <div class=" ml-10  ">
                                        Quantity:
                                        <select class="border">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                            <option value="">9</option>
                                            <option value="">10</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-4 text-sm">
                                    <h1 class="text-xl my-2">Product Details</h1>
                                    <div class="flex justify-between my-2">
                                        <div>Gemstone Quality :</div>
                                        <div>Better</div>
                                    </div>
                                    <div class="flex justify-between my-2">
                                        <div>Total Carat Weight :</div>
                                        {{-- <div>{{$purity->material_wt ?? ""}}</div> --}}
                                    </div>
                                    <div class="flex justify-between my-2">
                                        <div>Metal Type :</div>
                                        {{-- <div>{{$purity->purity_name ?? ""}}</div> --}}
                                    </div>
                                </div>





                            </div>
                        
                        </div>
                        @endforeach
             

                    </div>

                    <div class="w-full lg:w-5/12 px-4 bg-white my-2">
                        <div class="summery-menu py-4">
                            <h1 class="text-2xl pb-2 text-center ">Order Summary</h1>
                            <div class="border p-4">
                                <div class="flex justify-between text-sm ">
                                    <div>
                                        <h1>Total Items</h1>
                                    </div>
                                    <div>

                                        1
                                    </div>
                                </div>

                                <div class="flex justify-between mt-3 text-sm ">
                                    <div>
                                        <h1>Subtotal</h1>
                                    </div>
                                    <div>

                                        Rs:17000
                                    </div>
                                </div>
                                <div class="flex justify-between mt-3 text-sm ">
                                    <div>
                                        <h1>You Saved</h1>
                                    </div>
                                    <div>
                                        - Rs:1000
                                    </div>
                                </div>

                                <div class="flex justify-between my-3 text-sm ">
                                    <div>
                                        <h1>Delivery Charge</h1>
                                    </div>
                                    <div>
                                        Free
                                    </div>
                                </div>
                                <div class="flex justify-between my-3 text-sm ">
                                    <div>
                                        <h1>Sales Tax </h1>
                                    </div>
                                    <div>
                                        Rs: 0
                                    </div>
                                </div>
                                <hr>
                                <div class="flex justify-between mt-1 font-bold">
                                    <div>
                                        <h1 class="">Order Total</h1>
                                    </div>
                                    <div>
                                        Rs: 16000
                                    </div>
                                </div>


                                <a href="{{ asset('checkout') }}"><button
                                        class="mt-4 w-full py-1 bg-green-600 text-white rounded-full">Secure
                                        Checkout</button></a>
                            </div>
                        </div>
                    </div>
                </div>


                
                    @else
                        <div class="text-center">
                            <div class="flex justify-center ">
                                <img src="images/no-product.png" alt="">
                            </div>
                            <h1 class="text-2xl">Oh ho!</h1>
                            <p class="mt-2 text-2xl">Your Cart is Empty!</p>
                            <a href="{{ asset('/') }}"><button class="rounded-full py-2 px-4 mt-4 bg-pink-300">Start Shopping
                                    Now</button></a>
                        </div>

                     @endif


                
            </div>


            <div class=" mt-5">
                {{-- .....................grid card customer help............ --}}
                <div>
                    <div class="  gap-8 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 ">
                        <div
                            class="text-center p-4 bg-white border-2 border-gray-300 dark:border-gray-400 drop-shadow-xl rounded-lg ">
                            <div class="grid justify-items-center my-4 text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>

                            </div>
                            <div class="my-2">
                                <div class="py-2  text-md font-medium text-blue-700">
                                    <a href="tel:{{$Contacts->contact_no}}" class="">{{$Contacts->contact_no ?? ''}}</a>
                                </div>
                                <div>
                                    <p>Connect with our delight team over a quick phone call</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="text-center border-2 bg-white border-gray-300 p-4 dark:border-gray-300 drop-shadow-2xl rounded-lg">
                            <div class="relative grid justify-items-center my-4 text-lime-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                    class="bi bi-whatsapp text-center " viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg>
                               
                            </div>
                            <div class="my-2">
                                <div class="py-2 text-lime-700 text-md font-medium">
                                    <a href="https://wa.me/{{$Contacts->whatsapp_no}}">WhatsApp Us</a>
                                </div>
                                <p>Our 24x7 Shopping Assistant is just a text away</p>
                            </div>
                        </div>
                        <div
                            class="text-center border-2 bg-white border-gray-300 p-4 dark:border-gray-400 drop-shadow-2xl rounded-lg">
                            <div class="grid justify-items-center my-4 text-orange-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                            </div>
                            <div class="my-2">
                                <div class="py-2 break-words text-md font-medium text-orange-700 ">
                                    <a href="mailto:{{$Contacts->email_id}}">{{$Contacts->email_id ?? ''}}</a>
                                </div>
                                <div class="">
                                    <p>Our 24x7 Shopping Assistant is just a text away</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="text-center border-2 bg-white border-gray-300 p-4 dark:border-gray-400 drop-shadow-2xl rounded-lg">
                            <div class="grid justify-items-center my-4 text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                    fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg>
                                <button
                                    class="absolute top-0 -right-3 border border-yellow-500 -z-30 rotate-90 bg-gray-400 text-xs px-2 py-1 rounded-l-md">FEEDBACK</button>
                            </div>
                            <div class="my-2">
                                <div class="py-2 text-md font-medium text-yellow-500">
                                    <a href="">FAQs</a>
                                </div>
                                <p>Need an immediate answer? Check a frequently asked questions. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>

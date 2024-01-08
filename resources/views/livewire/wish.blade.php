<div>
   
<style>
    .wish-list::before{
    content: '';
    background-color:  rgb(253, 118, 237);
    width: 38%;
    height: 1px;
    position: absolute;
    right: 0;
    top: 50%;
}

.wish-list::after{
    content: '';
    background-color: rgb(253, 118, 237);
    width: 38%;
    height: 1px;
    position: absolute;
    left: 0;
    top: 50%;
}

</style>

<div class="container-1">
    <div class=" relative text-center my-10">
        <p class="wish-list ">Your Wishlist</p>
    </div>

    @if(session()->has('wish') && count(session()->get('wish'))>0) 
    <div class="grid grid-cols-4 gap-4 mb-10">
    
        @foreach (session()->get('wish') as $item)
        @php
            $product = App\Models\Product::find($item);
        @endphp
    
           
            @php
                if(count($product->images)>0)
                {
                    $url="storage/".$product->images->where('is_main',1)->first()->url ?? "";
                }
                else{
                    $url="images/No-image-found.jpg"; 
                }
            @endphp                             
            <div class="shadow border rounded-xl bg-pink-100 ">
                <div class="h-52 md:h-72 lg:h-80 relative">
                    <a href="{{asset('single')}}" target="_blank">
                        <img class="rounded-t-xl" src="{{asset($url)}}" alt="{{$product->sku}}" style="width: 100%; height:100%">
                       
                    </a>
                    <a ><span class="absolute top-2 right-4 cursor-pointer p-1" wire:click="removeWish({{$product->id}})" title="Remove"><i class="fa-solid fa-trash"></i></span></a>
                    {{-- @php
                    dd($product->id);
                    @endphp --}}
                </div>                                    
                <div class="h-auto px-3">
                    <h1 class="py-1 capitalize ">{{$product->product_name}}</h1>
                    <div class="flex justify-between pb-3 ">
                        <p class="text-red-700">Rs: {{$product->total}}</p>
                       
                      
                       
                           <button class=" px-2 cursor-pointer " wire:click="addtoCart({{$product->id}})" title="Add to cart"> <i class="fa-solid fa-cart-shopping"></i></button>

                  
                       
                    </div>
                </div>
            </div>  
   
        
     @endforeach
        
    
    </div>

    @else
        <div class="flex justify-center my-4">
            <div class="text-center ">
                <div class="">
                    <img  src="images/no-wish.png" alt=""  style="width:100%;">
                </div>
                    <h1 class="text-2xl mt-2">Oh ho!</h1>
                    <p class="mt-2 text-2xl">Your Wishlist is Empty!</p>
                    <a href="{{asset('/')}}"><button class="py-2 px-10 mt-4 bg-pink-300 rounded-full">Start Shopping</button></a>
            </div>
        </div> 

    @endif
    
</div>



</div>

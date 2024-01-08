
<div>
<style>
    .side-filter{
        background-color: white;
        
    }
    .side-filter h1{
      
        color: goldenrod;  
    }
    .side-filter h2{
        padding:3px 10px;
        font-size: 17px;
        color: goldenrod;
    }
    .side-filter h3{
        padding: 5px 10px;
        font-size: 18px;
        transition: 0.5s;

    }
    .side-filter h3:hover{color: goldenrod;}
    .side-filter .check-box{
        margin: 10px;
        
    }
    .side-filter .check-box input{
        outline:0;
        margin: 5px;
    }
    .side-filter .input-radio{
        margin: 10px;
    
    }
    .side-filter .input-radio input{
        margin: 5px;
    }
    
    /* -------------for outline------------- */
    .cont-check{
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 17px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
     
    }
    .cont-check input{
        position: absolute;
        opacity: 0;
         cursor: pointer;
        height: 0;
        width: 0;
    }
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 20px;
      width: 20px;
      /* background-color: #eee; */
      border: 1px solid rgb(248, 197, 248);
      transition: 0.5s;
      border-radius: 50px;
    }
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }
    .cont-check:hover input ~ .checkmark {
        background-color: goldenrod;
    }
    .cont-check input:checked ~ .checkmark {
      background-color: goldenrod;
    }
    .cont-check input:checked ~ .checkmark:after {
      display: block;
    }
    .cont-check .checkmark:after {
      left: 6px;
      top: 3px;
      width: 6px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
    .cont-check1 {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 17px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      
    }
    .cont-check1 input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }
    .checkmark1 {
      position: absolute;
      top: 0;
      left: 0;
      height: 20px;
      width: 20px;
      /* background-color: #eee; */
      border-radius: 50%;
      border: 1px solid rgb(247, 197, 247);
      transition: 0.5s;
    }
    .cont-check1:hover input ~ .checkmark1 {
        background-color: goldenrod;
    }
    .cont-check1 input:checked ~ .checkmark1 {
        background-color: goldenrod;
    }
    .checkmark1:after {
      content: "";
      position: absolute;
      display: none;
    }
    .cont-check1 input:checked ~ .checkmark1:after {
      display: block;
    }
    .cont-check1 .checkmark1:after {
         top: 5px;
        left: 5px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
   

    .scrollmenu::-webkit-scrollbar {
        width:8px !important;
        height: 6px;
      }
      
      /* Track */
      .scrollmenu::-webkit-scrollbar-track {
        box-shadow: inset 0 0 10px #c7c9ca; 
        border-radius: 10px;
        
      }
       
      /* Handle */
      .scrollmenu::-webkit-scrollbar-thumb {
        background: #c49bd1; 
        border-radius: 10px;
      }
      
      /* Handle on hover */
      .scrollmenu::-webkit-scrollbar-thumb:hover {
        background: #180215; 
      }

      .filter-menu{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
      }


/* ----------select css--------------------- */

      /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  border: 1px solid gray;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

/* .select-selected {
  background-color: DodgerBlue;
} */

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border:   6px solid transparent  ;
  border-color: #000 transparent transparent transparent;
       }

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #000 transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #000;
  padding: 6px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: #feebe4;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}


@media only screen and (max-width:  820px){
    #filterpage{
        z-index: 99;
    }
    .side-filter {
        display: none; 
        position: fixed;
        z-index: 2; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        /* overflow: auto; */
        background-color: rgb(0,0,0); 
        background-color: rgba(0,0,0,0.4);
    }
    .closebtn{display: block}
    .filterbtn{display: block}
}
    </style>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

        @php
        $Categories=\App\Models\Category::all();
        $metals=\App\Models\Metal::all();
        $metal_pu=\App\Models\Metalpurity::all();
        $ring_size=\App\Models\Ringsize::all();
        $Subcategory=\App\Models\Subcategory::all();
        @endphp

        <div class="relative">
            <img src="{{asset('storage/Categories/' . $category->c_banner)}}" alt="" style="width: 100%; height:auto;">

            <div class="pt-2 text-xs absolute pl-5 text-white top-0 left-0"><a href="{{asset('/')}}"> Home </a>/<span class="text-black"> {{$category->category_name}}</span></div>
           
        </div>    




    <div class=" ">
        <div class=" flex ">
            
                <div class="side-filter w-full  lg:w-2/12  rounded-xl " id="filterpage">
                  
                    <div class=" filter-menu bg-white">
                       
                        <div class=" bg-[#feebe4]  w-full  h-10 items-center flex justify-between px-2">
                            <span>Filter By</span> 
                            <div class="text-right hidden closebtn" onclick="closeFilter()"><i class="fas fa-times rounded px-2 hover:text-white  text-xl hover:bg-gray-400"></i></div>
                        </div>
                        <div class="filter-padding overflow-y-scroll h-screen scrollmenu pl-2 pb-5">
                          
                            <form action="">
                               
                                 <div class="sidebar-single capitalize" style="padding-top: 12px">
                            <h2 class="sidebar-title font-medium text-xl leading-loose uppercase">Category Type</h2>  
                            <hr class="leading-loose">
                         
                            
                            <div class="sidebar-body  ">
                                <ul class="checkbox-container categories-list hidetoggle ">
                                  
                                    @foreach ($category->styles as $item)

                                    
                                   <h6 class="mb-3 font-semibold text-base  capitalize effect " style="cursor: pointer" wire:click="showCategory({{$item->id}})">
                                        {{$item->slug}}</h6> 
{{--                                        
                                    @foreach ($item->subCategory as $sb)
                                  
                                 @if($item->id==$style_id) 
                                    
                                   <li>
                                        <div class="custom-control custom-checkbox " >
                                            <input type="checkbox" wire:model="categories.{{$sb->id}}"
                                                wire:change="filter" class="custom-control-input  text-golden w-5  h-5 focus:ring-0 my-1.5 focus:ring-0 my-1.5"
                                                id="customCheckCT{{$sb->id}}" name="category" value="{{$sb->id}}">
                                            <label class="custom-control-label" for="customCheckCT{{$sb->id}}">
                                               
                                                {{$sb->subcategory_name}}
                                           
                                               
                                            </label>
                                        </div>
                                    </li>                                   
                                    @endif 
                                   
                                    @endforeach  --}}
                                    @endforeach 

                            
                                
                                </ul>

                            </div>
                        
                        </div>

                                <div class="text-xs">
                                    <a href=""><h3>Shop By Style</h3></a>
                                    <a href=""><h3>Shop By Metal</h3></a>
                                    <a href=""><h3>Shop By Diamond</h3></a>
                                    <a href=""><h3>Shop By</h3></a>
                                </div>
                               
                        
                                <h2>PRICE</h2><hr>
                                <div class="check-box">
                                    <label class="cont-check">
                                        <input wire:change="filter" type="checkbox" checked="checked" wire:model="priceAll">All
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="cont-check">
                                        <input wire:change="filter" type="checkbox" wire:model="proce.{{1}}">Rs 0 -Rs 100
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="cont-check">
                                        <input wire:change="filter" type="checkbox" wire:model="proce.{{2}}">Rs 101 -Rs 200
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="cont-check">
                                        <input wire:change="filter" type="checkbox" wire:model="proce.{{3}}">Rs 201 - Rs 500
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="cont-check">
                                        <input wire:change="filter" type="checkbox" wire:model="proce.{{4}}">Rs 501 - Rs 1000
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="cont-check">
                                        <input wire:change="filter" type="checkbox" wire:model="proce.{{5}}">Rs 1001 - Rs 1...
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                    <h2>METAL</h2><hr>
                                    <div class="check-box">
                                        @foreach($metals as $mt_data)
                                        <label class="cont-check">
                                            <input wire:change="filter" wire:model="metalType.{{$mt_data->id}}"
                                            value="{{$mt_data->id}}" type="checkbox"  id="customCheckMT{{$mt_data->id}}">{{$mt_data->metal_name}}
                                            <span class="checkmark"></span>
                                        </label>
                                        @endforeach
                                    </div>
                                    
                                    <h2>METAL COLOR</h2><hr>
                                    <div class="input-radio">
                                        <label class="cont-check1">
                                            <input wire:change="filter" wire:model="colorType" type="radio"  name="metalColor" value="W" id="customCheckCT1">White
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                            <input wire:change="filter" wire:model="colorType" type="radio"  name="metalColor" value="Y" id="customCheckCT2">Yellow
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                            <input wire:change="filter" wire:model="colorType" type="radio"  name="metalColor" value="R" id="customCheckCT3">Rose
                                            <span class="checkmark1"></span>
                                        </label>
                                
                                    </div>
    
                                    <h2>Product Type</h2><hr>
                                    <div class="input-radio">
                                        @foreach($Categories as $cat_dat)
                                        <label class="cont-check">
                                            <input type="checkbox"  name="radio1"><a href="{{ asset('shop/' . $cat_dat->slug) }}"> {{$cat_dat->category_name}}</a>
                                            <span class="checkmark"></span>
                                        </label>
                                        @endforeach
                                        {{-- <label class="cont-check1">
                                            <input type="radio"  name="radio1">Earrings
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                            <input type="radio"  name="radio1">Necklaces
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                            <input type="radio"  name="radio1">Pendants
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                            <input type="radio"  name="radio1">Bangles
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                            <input type="radio"  name="radio1">Bracelets
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                            <input type="radio"  name="radio1">Chains
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                            <input type="radio"  name="radio1">Baby Bangles
                                            <span class="checkmark1"></span>
                                        </label>
                                       --}}
    
                                
                                    </div>
    
                                    <h2>METAL QUALITY</h2><hr>
                                    

                                    <div class="check-box">
                                        @foreach($metal_pu as $mp)
                                        <label class="cont-check">
                                            <input type="checkbox" wire:change="filter" wire:model="purities.{{$mp->id}}" value="{{$mp->id}}" >{{$mp->purity_name}}
                                            <span class="checkmark"></span>
                                        </label>
                                        @endforeach                                                                        
                                    </div>
    
                                    <h2>Ring size</h2><hr>
                                    <div class="check-box">
                                        @foreach($ring_size as $rs)
                                        <label class="cont-check">
                                            <input wire:change="filter" wire:model="ringSizes.{{$rs->id}}" type="checkbox" value="{{$rs->id}}"  name="radio">{{$rs->ring_size}}
                                            <span class="checkmark"></span>
                                        </label>
                                        @endforeach
                                                                               
                                    </div>
    
                                    <h2>Shop for</h2><hr>
                                    <div class="input-radio">
                                        <label class="cont-check1">
                                            <input wire:change="filter" wire:model="genders" type="radio"  name="genders" value="W" id="customCheckCT">Women
                                            <span class="checkmark1"></span>
                                        </label>
                                        <label class="cont-check1">
                                           <input wire:change="filter" wire:model="genders" type="radio"  name="genders" value="M" id="customCheckC1">Man
                                            <span class="checkmark1"></span>
                                        </label>
                                        
                                        
                                    </div>
                            </form>
                    
                        </div>
                    </div>
                </div>
            
 
                <div class="lg:w-10/12 w-full">
                    
                            <div class="flex justify-between z-10 bg-[#feebe4] items-center w-full  h-10 px-3   filter-menu">
                                
                                <div >
                                    <div class="flex  items-center">
                                        <span class=" p-1  cursor-pointer text-xl hidden filterbtn" onclick="openFilter()"><i class="fa-solid fa-filter"></i></span>
                                        <span class="">{{$category->category_name}} ({{$count = count($products)}})</span>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="mr-2"> Sort:</div>
                                    <div class="w-40 md:w-60 lg:w-44 bg-[#feebe4]  " >
                                        
                                        <select class="w-full py-2 border outline-0 bg-[#feebe4]">
                                        <option value="0">Best Sellers</option>
                                        <option value="1">Arrives Earliest</option>
                                        <option value="2">Price High to Low</option>
                                        <option value="3">Price Low to High</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>   

                    <div class="px-2">
                            {{-- <div class=" px-2 py-2">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, odit maiores rem animi illo itaque voluptatum enim sequi minima tempore doloribus non dolores autem cum explicabo obcaecati error. Perspiciatis, distinctio.
                                </p>
                            </div> --}}

                    @if(count($products)>0)   
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3  px-2 my-4">
                           

                                @foreach($products as $pro_item) 
                                @php
                         
                                    if(count($pro_item->images)>0)
                                    {
                                        $url="storage/".$pro_item->images->where('is_main',1)->first()->url ?? "";
                                    }
                                    else{
                                        $url="images/No-image-found.jpg"; 
                                    }
                                @endphp                             
                                <div class="shadow border rounded-xl bg-pink-100 ">
                                    <div class="h-52 md:h-72 lg:h-72">
                                        <a href="{{asset('single/'.$pro_item->id)}}" target="_blank" wire:click="recentView({{$pro_item->id}})">
                                            <img class="rounded-t-xl" src="{{asset($url)}}" alt="{{$pro_item->sku}}" style="width: 100%; height:100%">
                                           
                                        </a>                                        
                                    </div>                                    
                                    <div class="h-auto px-3">
                                        <h1 class="py-1 capitalize ">{{$pro_item->product_name}}</h1>
                                        <div class="flex justify-between pb-3 ">
                                            <p class="text-red-700">Rs: {{$pro_item->total}}</p>
                                           <div>
                                        @if(session()->has('wish'))
                                                @if(in_array($pro_item->id,session()->get('wish')))
                                               <button wire:click="removeWish({{$pro_item->id}})"
                                                    title="Remove from wishlist" data-bs-toggle="tooltip" >
                                                    <i class=" fas fa-heart text-blue-800 text-2xl"></i>
                                                </button>
                                                @else
                                                <a style="cursor: pointer" wire:click="wish({{$pro_item->id}},$front=1)"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist">
                                                    <i class="fa-regular fa-heart text-2xl text-blue-800"></i></a>
                                                @endif
                                            @else
                                            <a style="cursor: pointer" wire:click="wish({{$pro_item->id}},$front=1)"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to wishlist">
                                                <i class="fa-regular fa-heart text-2xl text-blue-800"></i></a>
                                            @endif

                                        </div> 
                                           
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            

                                
                        </div>
                        <div class="my-4 px-2 flex justify-content-end">
                            <div>{{ $products->links() }}</div>
                        </div>
                        @else
                             <div class="text-center">
                                <div class="lg:w-1/2 lg:w-1/3  py-4 mx-auto">
                                <img style="width:100%;" src="{{asset('images/no-product.jpg')}}" alt="">
                                </div>
                            </div>
                            @endif
                    </div>
                </div>
            </div> 
        </div>
        
           
      
       
       <script>

   
function openFilter() {
                document.getElementById("filterpage").style.display = "block";
            }
            function closeFilter() {
                document.getElementById("filterpage").style.display = "none";
            }
            var modal = document.getElementById('filterpage');

                window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                }




        $(".hidetoggle").click(function(){
        var a =$(".hidesub").toggle();        
     });
    </script>
</div>
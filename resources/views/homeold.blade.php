
    @extends('app')
    @section('content')


    <style>
       .carousel-indicators {
    bottom: -40px;
       }
       .carousel-indicators [data-bs-target] {
    width: 7px;
    height: 7px;
    border-radius: 50%;
       }
       

        .left-img{
            width: 100%;
            height:600px;
            overflow: hidden;
            }
            @media only screen and (max-width: 820px) and (min-width: 768px){   
        .left-img{
            height:500px;
            } 
        }
        @media only screen and (max-width:  767px) and (min-width: 412px){   
        .left-img{
            height:300px;
            } 
        }
        @media only screen and (max-width:  411px) and (min-width: 375px){   
        .left-img{
            height:300px;
            } 
        }
        @media only screen and (max-width:  374px) and (min-width: 280px){   
        .left-img{
            height:250px;
            } 
        }
        .left-img:hover img{transform: scale(1.1);}
        .left-img img, .bottom-leftright-img img, .right-img img, .left-image img{
            transition: 0.9s;
        }
        .right-img{
            width: 100%;
            height:300px;
            overflow: hidden;
        }
        @media only screen and (max-width:  767px) and (min-width: 412px){   
            .right-img{
            height:200px;
            } 
        }
        @media only screen and (max-width:  411px) and (min-width: 375px){   
            .right-img{
            height:200px;
            } 
        }
        @media only screen and (max-width:  374px) and (min-width: 280px){   
            .right-img{
            height:180px;
            } 
        }
        .right-img:hover img{transform: scale(1.1);}
        .bottom-leftright-img{
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        @media only screen and (max-width:  767px) and (min-width: 412px){   
            .bottom-leftright-img{
            height:300px;
            } 
        }
        @media only screen and (max-width:  411px) and (min-width: 375px){   
            .bottom-leftright-img{
            height:250px;
            } 
        }
        @media only screen and (max-width:  374px) and (min-width: 280px){   
            .bottom-leftright-img{
            height:200px;
            } 
        }
        .bottom-leftright-img:hover img{transform: scale(1.1);}


     .line-bottom::after{
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    left: 0;
    bottom: -5px;
    background-color: #000 ;
    
    transform: scale(0, 1);
    transition: transform 0.7s ease;
    }
.line-bottom:hover::after{transform: scale(1, 1);}

    .active0::after{
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    left: 0;
    bottom: -5px;
    background-color: #000 ;
    transform: scale(1, 1);
    }

.layer{
width: 100%;
height: 0;
background: linear-gradient(rgba(130, 176, 245, 0.6),rgb(233, 138, 225),rgba(231, 203, 203, 0.6));
position: absolute;
left:0;
bottom: 0;
overflow: hidden;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
text-align: center;
transition: 0.9s;
}
.product-wrapper{
    overflow: hidden;
}
.product-wrapper:hover .layer{height: auto;}
    
.animate-wrapper{

    margin: 10 auto;
    /* box-shadow: 0 0 5px #bababa; */
    position: relative;
    overflow: hidden;
}
.animate-wrapper:before,
.animate-wrapper:after{
    content: '';
    width: 0;
    height: 0;
    position: absolute;
    opacity: 0;
    z-index: 1;
    transition: all 0.9s;
}
.animate-wrapper::before{
    bottom: 5%;
    left: 5%;
    border-bottom: 3px solid #fff;
    border-left: 3px solid #fff;
}
.animate-wrapper::after{
    top: 5%;
    right: 5%;
    border-top: 3px solid #fff;
    border-right: 3px solid #fff;
}
.animate-wrapper:hover:before,
.animate-wrapper:hover:after{
    opacity: 1;
    width: 90%;
    height: 90%;
}
    .box{
        position: relative;
        width: 150px;
        height: 150px;
        background-color: rgb(243, 189, 189);
        border-radius: 50%;
        overflow: hidden;
       margin: auto;
    }
    .box::before{
        content: '';
        position: absolute;
        inset: -10px 50px;
        background: linear-gradient(315deg, #00ccff, #d400d4);
        transition: 1.5s;
        animation: animate 4s linear infinite;
    }
    .box:hover::before{
        inset: -20px 0px;
    }
    @keyframes animate{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }
    .box::after{
        content: '';
        position: absolute;
        inset: 4px;
        background: #feebe4;
        border-radius: 50%;
        z-index: 1;
    }
    .box-content{
        position: absolute;
        inset: 10px;
        border: 3px solid rgb(185, 185, 225);
        z-index: 3;
        border-radius: 50%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    
    @media only screen and (max-width:  900px) and (min-width: 768px){   
        .box {
    width: 110px;
    height: 110px;
        } 
        .box-content {
    inset: 7px;
        }
        .box-content a{
        margin-top: 6px !important;
        }
        .box::before {
    inset: -7px 37px;}
    }

    @media only screen and (max-width:  767px) and (min-width: 280px){
        .animat-menu {
            display: flex;
            justify-content: flex-start;
            overflow: auto;
        }
        .animat-menu::-webkit-scrollbar
    {
        width: 0;
    }
        .box {
    min-width: 110px;
    height: 110px;
    margin: 0 10px;
        } 
        .box-content {
    inset: 7px;
        }
        .box-content a{
        margin-top: 6px !important;
        }
        .box::before {
    inset: -10px 34px; 
  }
    }
    .box-content img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
        pointer-events: none;
        z-index: 3;
    }
    .box:hover .box-content img{
        opacity: 0;
    }
    .box-content h1{
        position: relative;
        text-align: center;
        color: #000;
    }
    .box-content a{
        margin-top: 12px;
        position: relative;
        color: red;
        padding: 3px 10px;
        background-color: #feebe4;
        border-radius: 25px;
        box-shadow: 10px 10px 10px -1px rgba(253, 4, 25, 0.15), -10px -10px 10px -1px rgba(250, 115, 126, 0.20);
    }
    .box-content a:hover{
        background-color: #fff;
    }
    
   


    .btn-bottom{
        border: none;
        border-radius: 50px;
        color: #000;
        top: 215px;
        left: 250px;
        box-shadow: 10px 10px 10px -1px rgba(114, 91, 93, 0.20), -10px -10px 10px -1px rgba(246, 74, 88, 0.1);
    }

    .banner-text{
        width: 500px;
        bottom: 100px;
        right: 20px;
    }
    .btn-banner{
        border: none;
        border-radius: 50px;
        color: #000;
        box-shadow: 10px 10px 10px -1px rgba(240, 11, 30, 0.15), -10px -10px 10px -1px rgba(250, 115, 126, 0.15);
    }
    .swiper-shadow:hover{
        box-shadow: 10px 10px 10px -1px rgba(252, 129, 140, 0.1), -10px -10px 10px -1px rgba(250, 115, 126, 0.10);
    }



    @media only screen and (max-width:  767px) and (min-width: 280px){
        .row{
            overflow-x: auto;
            flex-wrap: nowrap;
            
        }
        .row::-webkit-scrollbar {
        width:100px ;
        height: 6px;
        border-radius: 10px;
        background-color: #feebe4;
      }
        .row::-webkit-scrollbar-thumb {
        background: #f0531a; 
        border-radius: 10px;
      }
       
      
      /* Handle on hover */
      .row::-webkit-scrollbar-thumb:hover {
        background: #f0531a; 
      }

}
    
    @media only screen and (max-width: 750px){   
        .bottom-banner-1{
            display: none;
            } 
        }
        @media only screen and (min-width: 751px){   
        .bottom-banner-2{
            display: none;
            } 
        }


/*.gallery*/
.gallery{
	width: 100%;
	display: block;
	padding: 10px 0;
}
.gallery .gallery-filter{
	padding: 0 15px;
	width: 100%;
	text-align: center;
	margin-bottom: 20px;
}
@media only screen and (max-width:  766px) and (min-width: 280px){
    .gallery .gallery-filter{
        display: flex;
        justify-content: flex-start;
        overflow-x: auto;
    }
    .gallery .gallery-filter::-webkit-scrollbar
    {
        width: 0;
    }
}


.gallery .gallery-filter .filter-item{
	
	font-size: 16px;
   
	text-transform: uppercase;
	display: inline-block;
	margin:8px 25px;
	cursor: pointer;
	border-bottom: 2px solid transparent;
	line-height: 1.2;
	transition: all 0.3s ease;
}
.gallery .gallery-filter .filter-item.active{
	color: #f0531a;
	border-color : #f0531a;
}
.gallery .gallery-item{
	width: calc(100% / 4);
	padding: 5px;
}
.gallery .gallery-item-inner img{
	width: 100%;
}
.gallery .gallery-item.show{
	animation: fadeIn 0.5s ease;
}
@keyframes fadeIn{
	0%{
		opacity: 0;
	}
	100%{
		opacity: 1;
	}
}
.gallery .gallery-item.hide{
	display: none;
}

/*responsive*/
@media(max-width: 991px){
	.gallery .gallery-item{
		width: 50%;
	}
}
@media(max-width: 767px){
    .gallery .gallery-item{
		width: 100%;
	}	
	.gallery .gallery-filter .filter-item{
		margin-bottom: 10px;
	}
}
    </style>
    {{-- -----------------hero image start-------------- --}}

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        {{-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div> --}}
        <div class="carousel-inner ">

        @php
             $Categ=\App\Models\Category::first();
        @endphp
            @foreach($carousel_banner as $banner)

            <div class="carousel-item @if($loop->iteration==1) active @endif "  data-bs-interval="2000">
                <a href="{{asset('shop/'.$Categ->category_name)}}">
                    <img src="{{asset('storage/banners/'.$banner->image_name)}}" alt="" style="width:100%; height:auto;">
                </a>
            </div>
            @endforeach

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</div>


    {{-- -----------------hero image- end------------- --}}



    <div class="container-1 mt-20">
        {{-- -----------------animation- start Rotate------------- --}}
  
        <div class="animat-menu flex justify-around items-center my-10  text-center">
            @foreach($rotations as $rotdata)
            <div class="box">
                <div class="box-content">
                    <img src="{{asset('storage/files/'.$rotdata->image_name)}}" alt="">
                    <h1 class="text-lg capitalize ">{{$rotdata->category->category_name ?? ""}}</h1>
                    <a class="text-xs" href="{{ asset('shop/'.$rotdata->category_id) }}">{{$rotdata->button_name}}</a>
                </div>
            </div>
            @endforeach
            
        </div>
        
        {{-- -----------------animation- end------------- --}}
    


         {{-- -----------------all pruduct start------------- --}}
    <div class=" text-center">
        @php
             $headings=  \App\models\Homeheadcontent::find(3);
        @endphp
        <h1 class="my-2 text-2xl">{{$headings->heading}}</h1>
        <p class="mb-2">{{$headings->content}}</p>
    </div>
  

        {{-- <section>
            <div class="my-5 text-renter w-full"><h1>Latest Collections</h1></div>
         
            <div class="flex  " style="overflow-x:auto ">
                <div class="mx-2">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class=" mx-2">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class="mx-2 ">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class="mx-2 ">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class="mx-2 ">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class=" mx-2">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class=" mx-2">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class=" mx-2">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;">
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class=" mx-2">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class="mx-2 ">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
                <div class="mx-2 ">
                    <div class=""style=" width: 300px;height: 400px;">
                        <img src="images/classic.webp" alt="" style="width: 100%; height:100%;" >
                    </div>
                    <a class="hover:text-red-500" href=""><button class="py-2 block ">lassic</button></a>
                </div>
           
        </div>
        </section> --}}

        <section class="gallery">
            
                <div class="row">
                    <div class="gallery-filter">
                        <span class="filter-item active" data-filter="all">All</span>
                        {{-- @foreach($Categories as $cat) --}}
                        @foreach($galler_filter->unique('category_id') as $galldatas)
                        <span class="filter-item " data-filter="{{$galldatas->category_id}}">{{$galldatas->category_id}}</span>
                        {{-- <span class="filter-item " data-filter="{{$cat->category_name}}">{{$cat->category_name}}</span> --}}
                        {{-- <span class="filter-item" data-filter="Ring">RINGS</span>
                        <span class="filter-item" data-filter="Earings">Earing</span>
                        <span class="filter-item" data-filter="Bracelets">Bracelet</span>
                        <span class="filter-item" data-filter="Necklace">Necklace</span> --}}
                        {{-- <span class="filter-item" data-filter="earing">Earing</span>
                        <span class="filter-item" data-filter="bracelet">Bracelet</span>
                        <span class="filter-item" data-filter="necklace">Necklace</span> --}}
                        @endforeach
                    </div>
                </div>
                <div class="row">
                  @foreach($galler_filter as $galldatas)
                  <div class="gallery-item {{$galldatas->category_id}} ">
                        
                    <a  href="" class="hover:text-red-500">
                        <div class=" gallery-item-inner  overflow-hidden">
                            <img  class="hover:scale-110 duration-700" src="{{asset('storage/Galler_filter/'.$galldatas->image_name)}}" alt="" >
                        </div>
                        <button class="py-2 block ">{{$galldatas->product_type}}</button>
                    </a>
                </div>

                    {{-- <div class="gallery-item {{$galldatas->category->category_name}} ">
                        
                        <a  href="" class="hover:text-red-500">
                            <div class=" gallery-item-inner  overflow-hidden">
                                <img  class="hover:scale-110 duration-700" src="{{asset('storage/files/'.$galldatas->image_name)}}" alt="" >
                            </div>
                            <button class="py-2 block ">{{$galldatas->product_type}}</button>
                        </a>
                    </div> --}}
                    @endforeach 
                    
                    {{-- <div class="gallery-item  rings">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/three-stone-ring.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Three stone</button>
                        </a>
                    </div>
                    <div class="gallery-item rings">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/vintage-inspired-ring.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Vintage</button>
                        </a>
                    </div>
                    <div class="gallery-item rings">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/infinity-ring.webp" alt="" >
                            </div>
                            <button class="py-2 block ">infinity</button>
                        </a>
                    </div>  --}}




                    {{-- <div class="gallery-item earing ">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/classic-earring.webp" alt="" >
                            </div>
                            <button class="py-2 block ">lassic</button>
                        </a>
                    </div>
                    <div class="gallery-item earing">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/halo-earing.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Halo</button>
                        </a>
                    </div>
                    <div class="gallery-item earing">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/vintage-inspired-earing.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Vintage</button>
                        </a>
                    </div>
                    <div class="gallery-item earing">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                            <img class="hover:scale-110 duration-700" src="images/fashion-earing.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Fashion</button>
                        </a>
                    </div>


                    <div class="gallery-item bracelet ">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/bangle-bracelet.webp" alt="" >
                            </div>
                            <button class="py-2 block ">lassic</button>
                        </a>
                    </div>
                    <div class="gallery-item bracelet">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/chain-bracelet.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Chain</button>
                        </a>
                    </div>
                    <div class="gallery-item bracelet">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/tennis-bracelet.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Tennis</button>
                        </a>
                    </div>
                    
                    <div class="gallery-item bracelet">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/fashion-bracelet.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Fashion</button>
                        </a>
                    </div>


                    <div class="gallery-item necklace ">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/classic-neckelace.webp" alt="" >
                            </div>
                            <button class="py-2 block ">lassic</button>
                        </a>
                    </div>
                    <div class="gallery-item necklace">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/three-stone-neckelace.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Three stone</button>
                        </a>
                    </div>
                    <div class="gallery-item necklace">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/vintage-inspired-neckelace.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Vintage</button>
                        </a>
                    </div>   
                    <div class="gallery-item necklace">
                        <a  href="" class="hover:text-red-500">
                            <div class="gallery-item-inner overflow-hidden">
                                <img class="hover:scale-110 duration-700" src="images/heart-neckelace.webp" alt="" >
                            </div>
                            <button class="py-2 block ">Heart</button>
                        </a>
                    </div> 
                --}}
                    <!-- gallery item end -->
                </div>
       
        </section>
        
  


       

   
    {{-- -----------------all pruduct end------------- --}}

    {{-- -----------------multipal pruduct image start------------- --}}
        
    @php 
    $gallerydata =\App\Models\Categorygallery::first(); 
    @endphp
    <div class="grid lg:grid-cols-2 my-10 ">
       
            <div class="left-img">
                    <img src="{{asset('storage/Gallery_4/'.$gallerydata->left_image)}}" alt="" style="width: 100%; height:100%;">
            </div>
            <div class="">
                <div class="right-img">
                    <img src="{{asset('storage/Gallery_4/'.$gallerydata->right_image)}}" alt=""  style="width: 100%; height:100%;">
                    
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-2">
                    <div class="bottom-leftright-img"><img src="{{asset('storage/Gallery_4/'.$gallerydata->bottom_left_image)}}" alt="" style="width: 100%; height:100%;"></div>
                    <div class="bottom-leftright-img"> <img src="{{asset('storage/Gallery_4/'.$gallerydata->bottom_right_image)}}" alt=""  style="width: 100%; height:100%;"></div>
                </div>

            </div>
         
    </div> 
    
     {{-- -----------------multipal pruduct image end------------- --}}


     {{-- -----------------swiper slider start------------- --}}

    <div class="my-5">
        @php
            $headings=  \App\models\Homeheadcontent::find(6);
        @endphp
        <h1 class="text-2xl">{{$headings->heading}}</h1>
        <p class="mt-2">{{$headings->content}}</p>
    </div>


     <div class="swiper mySwiper my-10">
        <div class="swiper-wrapper ">
    @foreach($swiperdata as $slid_data)
        <div class="swiper-slide  shadow w-full  swiper-shadow">
            <div class="w-full h-48 md:h-60 lg:h-60 ">
                <img src="{{asset('storage/Sliders/'.$slid_data->image_name)}}" alt="" style="width:100%; height:100%;">
            </div>
            <div class="h-auto px-2 text-sm">
                <h1 class="my-2 ">{{$slid_data->swiper_content}} </h1>
                <p class="mt-2 mb-2 text-red-400  ">Rs : {{$slid_data->swiper_price}}</p>
            </div>
        </div>
    @endforeach

    </div> 
    {{-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> --}}
    {{-- <div class="swiper-pagination"></div> --}}
  </div> 

    {{-- -----------------swiper slider end------------- --}}


    {{-- -----------------Spotlight product start------------ --}}

     <div class="mt-20">
        @php
          $headings=  \App\models\Homeheadcontent::find(7);
        @endphp
             <h1 class="my-2 text-2xl">{{$headings->heading}}</h1>
        <p class="mb-4">{{$headings->content}}</p>
    </div>


    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 my-10 ">
        @foreach($spotlight as $collect)
        <div>
            <div class="product-wrapper relative">
                <img class="hover:scale-110 duration-700" src="{{asset('storage/Spotlights/'.$collect->image_name)}}" style="width:100%; height:330px;">
                <div class="layer">
                    <p class=" px-2 py-2 text-white" >
                        {{$collect->about_collection}}
                    </p>
                </div>
            </div>
            <a class="hover:text-red-400" href=""><button class=" py-4 block" > {{$collect->collection_name}}</button></a>
        </div>
        @endforeach
    </div>
   
   
    </div> 


    {{-- -----------------Spotlight product end------------ --}}

    {{-- -----------------bottom banner start------------ --}}
  
    @php
        $bottom_banner=\App\Models\Bottombanner::first();  
    @endphp
       <div class="">
            <a href="{{asset('shop/'.$Categ->category_name)}}">
                <img class="bottom-banner-1" src="{{asset('storage/bottombanners/'.$bottom_banner->desktop_image)}}" alt="" style="width: 100%; height:auto;">
                <img class="bottom-banner-2" src="{{asset('storage/bottombanners/'.$bottom_banner->mobile_image)}}" alt="" style="width: 100%; height:auto;">
            </a>
        </div> 
    {{-- -----------------bottom banner end------------ --}}

     {{-- -----------------Tokens Love start------------ --}}
        <div class="container-1 my-10">

            <div class="">
                @php
                    $headings=  \App\models\Homeheadcontent::find(8);
                @endphp
                <h1 class="my-2 text-2xl">{{$headings->heading}}</h1>
                <p class="mb-4">{{$headings->content}}</p>
            </div>

            <div class=" grid lg:grid-cols-4 md:grid-cols-2 gap-4 mt-10">
                @foreach($Celebration_image as $image)
                    <div>
                        <div class="animate-wrapper ">
                            <img   src="{{asset('storage/Celebrations/'.$image->image_name)}}" alt="" style="width:100%; height:330px;" >
                        </div>
                        <a  class="hover:text-red-500" href=""><button class="py-4 block ">{{$image->ring_name}}</button></a>
                    </div>
                @endforeach
                
            </div>
        </div> 
     {{-- -----------------Tokens Love end------------ --}}









    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <!-- Initialize Swiper -->
   <script>
     var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
       spaceBetween: 12,
       loop: true,
       centeredSlides: true,
       centerSlide:true,
       fade: true,
       autoplay: {
         delay: 2000,
         disableOnInteraction: false,
       },
       pagination: {
         el: ".swiper-pagination",
         clickable: true,
       },
       navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
       },
       breakpoints:{
        0:{
          slidesPerView: 2,
        },
        520:{
          slidesPerView: 5,
        },
        992:{
          slidesPerView: 5,
        },
       },
     });
   </script>



            
 
<script> 
            
        
    const filterContainer = document.querySelector(".gallery-filter"),
 galleryItems = document.querySelectorAll(".gallery-item");

 filterContainer.addEventListener("click", (event) =>{
   if(event.target.classList.contains("filter-item")){
        // deactivate existing active 'filter-item'
        filterContainer.querySelector(".active").classList.remove("active");
        // activate new 'filter-item'
        event.target.classList.add("active");
        const filterValue = event.target.getAttribute("data-filter");
        galleryItems.forEach((item) =>{
       if(item.classList.contains(filterValue) || filterValue === 'all'){
           item.classList.remove("hide");
            item.classList.add("show");
       }
       else{
           item.classList.remove("show");
           item.classList.add("hide");
       }
        });
   }
 });
</script>


    @endsection
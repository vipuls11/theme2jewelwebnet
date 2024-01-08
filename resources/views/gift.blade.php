@extends('app')
@section('content')
<style>
  /* Compatibility styles for frameworks like bootstrap, foundation e.t.c */
.xzoom-source img, .xzoom-preview img, .xzoom-lens img {
  display: block;
  max-width: none;
  max-height: none;
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
  transition: none;
}
/* --------------- */

/* xZoom Styles below */
.xzoom-container { 
  display: inline-block;
}

.xzoom-thumbs {
  text-align: center;
  margin-bottom: 10px;
}

.xzoom { 
  -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
  -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);  
}
.xzoom2, .xzoom3, .xzoom4, .xzoom5 {
  -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
  -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
}

/* Thumbs */
.xzoom-gallery, .xzoom-gallery2, .xzoom-gallery3, .xzoom-gallery4, .xzoom-gallery5 {
  border: 1px solid #cecece;
  margin-left: 5px;
  margin-bottom: 10px;
}

.xzoom-source, .xzoom-hidden {
  display: block;
  position: static;
  float: none;
  clear: both;
}

/* Everything out of border is hidden */
.xzoom-hidden {
  overflow: hidden;
}

/* Preview */
.xzoom-preview {
  border: 1px solid #888;
  background: #2f4f4f;
  box-shadow: -0px -0px 10px rgba(0,0,0,0.50);
}

/* Lens */
.xzoom-lens {
  border: 1px solid #555;
  box-shadow: -0px -0px 10px rgba(0,0,0,0.50);
  cursor: crosshair;
}

/* Loading */
.xzoom-loading {
  background-position: center center;
  background-repeat: no-repeat;
  border-radius: 100%;
  opacity: .7;
  background: url(../images/xloading.gif);
  width: 48px;
  height: 48px;
}

/* Additional class that applied to thumb when it is active */
.xactive {
  -webkit-box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
  -moz-box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
  box-shadow: 0px 0px 3px 0px rgba(74,169,210,1); 
  border: 1px solid #4aaad2;
}

/* Caption */
.xzoom-caption {
  position: absolute;
  bottom: -43px;
  left: 0;
  background: #000;
  width: 100%;
  text-align: left;
}

.xzoom-caption span {
  color: #fff;
  font-family: Arial, sans-serif;
  display: block;
  font-size: 0.75em;
  font-weight: bold;
  padding: 10px;
}
</style>

    <div>
        <img src="images/gift-banner.png" alt="" style="width: 100%; height:auto;">
    </div>

    <div  class="container-1">
        <h1 class="text-3xl text-center my-10">FIND THE PERFECT GIF</h1>
        <div class="flex justify-center my-10 ">
            <a class="py-2 px-10 bg-pink-200 mx-2" href="">Shop Earrings</a>
            <a class="py-2 px-10 bg-pink-200 mx-2" href="">Shop Pendants</a>
            <a class="py-2 px-10 bg-pink-200 mx-2" href="">Shop Rings</a>
            <a class="py-2 px-10 bg-pink-200 mx-2" href="">Shop Necklaces</a>
            <a class="py-2 px-10 bg-pink-200 mx-2" href="">Shop Bracelets</a>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <img src="images/gift-image-1.jpg" alt="" style="width: 100%; height:600px;">
            </div>
            <div>
                <img class="pb-5" src="images/gift-image-2.jpg" alt="" style="width: 100%; height:300px;">
                <img src="images/Jewelry-Gift-Box.jpg" alt="" style="width: 100%; height:300px;">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 my-10">
            <div><img src="images/gift-image-4.jpg" alt="" style="width: 100%; height:300px;"></div>
            <div><img src="images/gift-image-3.webp" alt="" style="width: 100%; height:300px;"></div>
        </div>
    </div>



          

@endsection
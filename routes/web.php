<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KitcoController;
use App\Http\Controllers\CelebrationController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BottombannerController;
use App\Http\Controllers\SpotcollectionController;
use App\Http\Controllers\SwipersliderController;
use App\Http\Controllers\CategorygalleryController;
use App\Http\Controllers\RotationalbuttonController;
use App\Http\Controllers\GalleryfilterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategorytypeController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\MetalController;
use App\Http\Controllers\RingsizeController;
use App\Http\Controllers\MetalpurityController;
use App\Http\Controllers\DiamondqualityController;
use App\Http\Controllers\DiamondshapeController;
use App\Http\Controllers\DiamondcutsController;
use App\Http\Controllers\ColorstoneController;
use App\Http\Controllers\ColorstonequalityController;
use App\Http\Controllers\HomeheadcontentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SilvertypeController;
use App\Http\Controllers\SilverpurityController;
use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\PlatinumpurityController;
use App\Models\Celebration;
use App\Models\Banner;
use App\Models\Spotcollection;
use App\Models\Swiperslider;
use App\Models\Rotationalbutton;
use App\Models\Galleryfilter;
use App\Models\Category;
use App\Models\Categorytype;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware([
    'auth',
])->group(function () {
Route::get('/admin', function () {
    return view('dashboard');
});
Route::get('/customer-list', function () {
    return view('customer-list');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/role', function () {
    return view('role');
});
Route::get('/category-product', function () {
    return view('category-product');
});

// Home page heading and content

Route::Get('home_heading_content',[HomeheadcontentController::class, 'index']);
Route::post('home_heading_content/create',[HomeheadcontentController::class, 'create']);
Route::get('home_heading_content',[HomeheadcontentController::class, 'view']);
Route::get('home_heading_content/edit/{id}',[HomeheadcontentController::class, 'edit']);
Route::get('home_heading_content/delete/{id}',[HomeheadcontentController::class, 'delete']);
// Products
Route::Get('products',[ProductController::class, 'index']);

// Category

Route::Get('category',[CategoryController::class, 'index']);
Route::post('category/create',[CategoryController::class, 'create']);
Route::get('category',[CategoryController::class, 'view']);
Route::get('category/edit/{id}',[CategoryController::class, 'edit']);
Route::get('category/delete/{id}',[CategoryController::class, 'delete']);

// Category Type

Route::Get('category-type',[CategorytypeController::class, 'index']);
Route::post('category-type/create',[CategorytypeController::class, 'create']);
Route::get('category-type',[CategorytypeController::class, 'view']);
Route::get('category-type/edit/{id}',[CategorytypeController::class, 'edit']);
Route::get('category-type/delete/{id}',[CategorytypeController::class, 'delete']);

// Subcategory Type
Route::Get('subcategory',[SubcategoryController::class, 'index']);
Route::get('categorytype/{category_name}',[SubcategoryController::class, 'categoryType']);
Route::post('subcategory/create',[SubcategoryController::class, 'create']);
Route::get('subcategory',[SubcategoryController::class, 'view']);
Route::get('subcategory/edit/{id}',[SubcategoryController::class, 'edit']);
Route::get('subcategory/delete/{id}',[SubcategoryController::class, 'delete']);

// Metals
Route::Get('metal',[MetalController::class, 'index']);
Route::post('metal/create',[MetalController::class, 'create']);
Route::get('metal',[MetalController::class, 'view']);
Route::get('metal/edit/{id}',[MetalController::class, 'edit']);
Route::get('metal/delete/{id}',[MetalController::class, 'delete']);

// Ring size
Route::Get('ring-size',[RingsizeController::class, 'index']);
Route::post('ring-size/create',[RingsizeController::class, 'create']);
Route::get('ring-size',[RingsizeController::class, 'view']);
Route::get('ring-size/edit/{id}',[RingsizeController::class, 'edit']);
Route::get('ring-size/delete/{id}',[RingsizeController::class, 'delete']);

// Metal-purity
Route::Get('metal-purity',[MetalpurityController::class, 'index']);
Route::post('metal-purity/create',[MetalpurityController::class, 'create']);
Route::get('metal-purity',[MetalpurityController::class, 'view']);
Route::get('metal-purity/edit/{id}',[MetalpurityController::class, 'edit']);
Route::get('metal-purity/delete/{id}',[MetalpurityController::class, 'delete']);



// silvertype
Route::Get('silvertype',[SilvertypeController::class, 'index']);
Route::post('silvertype/create',[SilvertypeController::class, 'create']);
Route::get('silvertype',[SilvertypeController::class, 'view']);
Route::get('silvertype/edit/{id}',[SilvertypeController::class, 'edit']);
Route::get('silvertype/delete/{id}',[SilvertypeController::class, 'delete']);

// silver purity
Route::Get('silver_purity',[SilverpurityController::class, 'index']);
Route::post('silver_purity/create',[SilverpurityController::class, 'create']);
Route::get('silver_purity',[SilverpurityController::class, 'view']);
Route::get('silver_purity/edit/{id}',[SilverpurityController::class, 'edit']);
Route::get('silver_purity/delete/{id}',[SilverpurityController::class, 'delete']);

// Platinum
Route::Get('platinum',[PlatinumController::class, 'index']);
Route::post('platinum/create',[PlatinumController::class, 'create']);
Route::get('platinum',[PlatinumController::class, 'view']);
Route::get('platinum/edit/{id}',[PlatinumController::class, 'edit']);
Route::get('platinum/delete/{id}',[PlatinumController::class, 'delete']);

// Platinum purity
Route::Get('platinum_purity',[PlatinumpurityController::class, 'index']);
Route::post('platinum_purity/create',[PlatinumpurityController::class, 'create']);
Route::get('platinum_purity',[PlatinumpurityController::class, 'view']);
Route::get('platinum_purity/edit/{id}',[PlatinumpurityController::class, 'edit']);
Route::get('platinum_purity/delete/{id}',[PlatinumpurityController::class, 'delete']);

// Diamond quality
Route::Get('diamond-quality',[DiamondqualityController::class, 'index']);
Route::post('diamond-quality/create',[DiamondqualityController::class, 'create']);
Route::get('diamond-quality',[DiamondqualityController::class, 'view']);
Route::get('diamond-quality/edit/{id}',[DiamondqualityController::class, 'edit']);
Route::get('diamond-quality/delete/{id}',[DiamondqualityController::class, 'delete']);

// Diamond shape
Route::Get('diamond_shape',[DiamondshapeController::class, 'index']);
Route::post('diamond_shape/create',[DiamondshapeController::class, 'create']);
Route::get('diamond_shape',[DiamondshapeController::class, 'view']);
Route::get('diamond_shape/edit/{id}',[DiamondshapeController::class, 'edit']);
Route::get('diamond_shape/delete/{id}',[DiamondshapeController::class, 'delete']);

// Diamond cuts
Route::Get('diamond_cuts',[DiamondcutsController::class, 'index']);
Route::post('diamond_cuts/create',[DiamondcutsController::class, 'create']);
Route::get('diamond_cuts',[DiamondcutsController::class, 'view']);
Route::get('diamond_cuts/edit/{id}',[DiamondcutsController::class, 'edit']);
Route::get('diamond_cuts/delete/{id}',[DiamondcutsController::class, 'delete']);

// Color stones shape
Route::Get('Color_stone',[ColorstoneController::class, 'index']);
Route::post('Color_stone/create',[ColorstoneController::class, 'create']);
Route::get('Color_stone',[ColorstoneController::class, 'view']);
Route::get('Color_stone/edit/{id}',[ColorstoneController::class, 'edit']);
Route::get('Color_stone/delete/{id}',[ColorstoneController::class, 'delete']);

// Color stones quality
Route::Get('color_stone_quality',[ColorstonequalityController::class, 'index']);
Route::post('color_stone_quality/create',[ColorstonequalityController::class, 'create']);
Route::get('color_stone_quality',[ColorstonequalityController::class, 'view']);
Route::get('color_stone_quality/edit/{id}',[ColorstonequalityController::class, 'edit']);
Route::get('color_stone_quality/delete/{id}',[ColorstonequalityController::class, 'delete']);


// Top Banner

Route::Get('banner',[BannerController::class, 'index']);
Route::post('banner/create',[BannerController::class, 'create']);
Route::get('banner',[BannerController::class, 'view']);
Route::get('banner/edit/{id}',[BannerController::class, 'edit']);
Route::get('banner/delete/{id}',[BannerController::class, 'delete']);

// Rotational button

Route::Get('Rotational-button',[RotationalbuttonController::class, 'index']);
Route::post('Rotational-button/create',[RotationalbuttonController::class, 'create']);
Route::get('Rotational-button',[RotationalbuttonController::class, 'view']);
Route::get('Rotational-button/edit/{id}',[RotationalbuttonController::class, 'edit']);
Route::get('Rotational-button/delete/{id}',[RotationalbuttonController::class, 'delete']);

// gallery filter

Route::Get('Gallery-filter',[GalleryfilterController::class, 'index']);
Route::post('Gallery-filter/create',[GalleryfilterController::class, 'create']);
Route::get('Gallery-filter',[GalleryfilterController::class, 'view']);
Route::get('Gallery-filter/edit/{id}',[GalleryfilterController::class, 'edit']);
Route::get('Gallery-filter/delete/{id}',[GalleryfilterController::class, 'delete']);

// Catagory gallery

Route::Get('categorygallery',[CategorygalleryController::class, 'index']);
Route::post('categorygallery/create',[CategorygalleryController::class, 'create']);
Route::get('categorygallery',[CategorygalleryController::class, 'view']);
Route::get('categorygallery/edit/{id}',[CategorygalleryController::class, 'edit']);
Route::get('categorygallery/delete/{id}',[CategorygalleryController::class, 'delete']);

// swiper slider

Route::Get('swiper-slider',[SwipersliderController::class, 'index']);
Route::post('swiper-slider/create',[SwipersliderController::class, 'create']);
Route::get('swiper-slider',[SwipersliderController::class, 'view']);
Route::get('swiper-slider/edit/{id}',[SwipersliderController::class, 'edit']);
Route::get('swiper-slider/delete/{id}',[SwipersliderController::class, 'delete']);

// spotlight collection

Route::Get('spotlightcollection',[SpotcollectionController::class, 'index']);
Route::post('spotlightcollection/create',[SpotcollectionController::class, 'create']);
Route::get('spotlightcollection',[SpotcollectionController::class, 'view']);
Route::get('spotlightcollection/edit/{id}',[SpotcollectionController::class, 'edit']);
Route::get('spotlightcollection/delete/{id}',[SpotcollectionController::class, 'delete']);

// bottom Banner

Route::Get('bottom-banner',[BottombannerController::class, 'index']);
Route::post('bottom-banner/create',[BottombannerController::class, 'create']);
Route::get('bottom-banner',[BottombannerController::class, 'view']);
Route::get('bottom-banner/edit/{id}',[BottombannerController::class, 'edit']);
Route::get('bottom-banner/delete/{id}',[BottombannerController::class, 'delete']);

//Celebration

Route::post('Celebration/create',[CelebrationController::class, 'create']);
Route::get('Celebration',[CelebrationController::class, 'view']);
Route::get('Celebration/edit/{id}',[CelebrationController::class, 'edit']);
Route::Post('Celebration/update',[CelebrationController::class, 'update']);
Route::get('Celebration/delete/{id}',[CelebrationController::class, 'delete']);

//Contact
Route::Get('contact_details',[ContactController::class, 'index']);
Route::post('contact_details/create',[ContactController::class, 'create']);
Route::get('contact_details',[ContactController::class, 'view']);
Route::get('contact_details/edit/{id}',[ContactController::class, 'edit']);
Route::get('contact_details/delete/{id}',[ContactController::class, 'delete']);
//kitcos
Route::Get('kitcos',[KitcoController::class, 'index']);
Route::post('kitcos/create',[KitcoController::class, 'create']);
Route::get('kitcos',[KitcoController::class, 'view']);
Route::get('kitcos/edit/{id}',[KitcoController::class, 'edit']);
Route::get('kitcos/delete/{id}',[KitcoController::class, 'delete']);
});




Route::get('/', function () {
    $Categories=Category::all();
    $Celebration_image = Celebration::all();
    $carousel_banner = Banner::all();
    $spotlight =Spotcollection::all();
    $swiperdata =Swiperslider::all();
    $rotations =Rotationalbutton::all();
    $galler_filter =Galleryfilter::all();
    return view('home',compact('Categories','Celebration_image','carousel_banner',
    'spotlight','swiperdata','rotations','galler_filter'));
});
Route::get('/header', function () {
    $Categories=Category::all();
    $Categories_type=Categorytype::all();
    $Sub_categories=Subcategory::all();
    return view('header',compact('Categories','Categories_type','Sub_categories'));
});
Route::get('/footer', function () {
    return view('footer');
});

Route::get('/shop/{category}/{style?}/{sub_category?}', function($category,$style=null,$sub_category=null) {
    $category = Category::where('slug',$category)->first();
    $category_type = Categorytype::where('slug',$style)->where('category_id',$category->id)->first();
    // dd($category_type);
    if($category_type)
    {
        $sub_category = Subcategory::where('slug',$sub_category)->where('category_id',$category->id)->where('category_type_id',$category_type->id)->first();
        
    }
    else{
        $sub_category=null;
    }

    return view('product-front-component',compact('category','category_type','sub_category'));
});

Route::get('/single/{id}', function ($id) {
    return view('single-product', compact('id'));
});

Route::get('/gift', function () {
    return view('gift');
});
Route::get('/wish', function () {
    return view('wishlist');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/search', function () {
    return view('search');
});



// Route::get('/header',[HeaderController::class,'headers']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('custom-logout',function(Request $request){
    Session::flush();
        
        Auth::logout();

        return redirect('/');
})->name('custom.logout');

<?php

namespace App\Http\Controllers;

    use App\Models\Product;
    use Illuminate\Http\Request;
    use App\Models\Image;
    use App\Models\Image_product;
    use App\Models\Category;
    use App\Models\Ringsize;
    use App\Models\Contact;
    use App\Models\Mail;
    use App\Models\Subscribe;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
   public function index(Request $request){
    return view('products');
 }





}

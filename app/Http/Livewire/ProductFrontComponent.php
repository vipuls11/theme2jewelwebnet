<?php

namespace App\Http\Livewire;
use App\Imports\Cart;
use App\Imports\ProductImport;
use App\Models\Category;
use App\Models\MaterialMapProduct;
use App\Models\Categorytype;
use App\Models\Chain;
use App\Models\Colorstonequality;
use App\Models\ColorStoneShape;
use App\Models\Diamondcuts;
use App\Models\Diamondquality;
use App\Models\Diamondshape;
use App\Models\Image;
use App\Models\CategoryProduct;
use App\Models\Kitco;
use App\Models\Metalpurity;
use App\Models\Silverpurity;
use App\Models\Platinumpurity;
use App\Models\Metal;
use App\Models\Product;
use App\Models\Ringsize;
use App\Models\Subcategory;
use App\Models\Currency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use Str;
use Session;


class ProductFrontComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
public $category;
public $category_type;
public $sub_category;
public $metalType=[];
public $metalColor=[];
public $colorType;
public $purities;
public $ringSizes;
public $genders;
 public $style_id;

    public function mount($category,$category_type,$sub_category)
    {
     
        $this->category = $category;
        $this->category_type = $category_type;
        $this->sub_category = $sub_category;
    }



      public function showCategory($id)
    {
      
        $this->category_type[$id] = $id;
       
        $this->style_id= $id;
       
    }


    public function wish($id)
    {
        session()->push('wish', $id);
        return redirect(request()->header('Referer'));
    }
    public function removeWish($id)
    {
        foreach (session()->get('wish') as $key => $item) {
            if ($id === $item) {
                session()->pull('wish.' . $key);
                break;
            }
        }
        return redirect(request()->header('Referer'));
    }

     public function recentView($id)
    {
        if(empty(Session::get('session_id'))){
            $session_id=md5(uniqid(rand(),true));
        }
        else{
            $session_id=Session::get('session_id');
        }
        Session::put('session_id',$session_id); 

        $recently_viewed_products=DB::table('recently_viewed_products')->where(['product_id'
        =>$id,'session_id'=>$session_id])->count();
        if($recently_viewed_products==0){
            DB::table('recently_viewed_products')->insert([
                'product_id'=>$id,'session_id'=>$session_id
            ]);
        }
       
    }

    
     public function filter()
     {
        
     }

    public function render()
    {
          
        if($this->sub_category)
        {
            ($this->sub_category." ".$this->category_type->id);
            $product_ids = CategoryProduct::where('category_id',$this->category->id)
            ->where('categorytype_id',$this->category_type->id)
            ->where('subcategory_id',$this->sub_category->id)
            ->pluck('product_id');  
        }elseif($this->category_type)
        {
            $product_ids = CategoryProduct::where('category_id',$this->category->id)
            ->where('categorytype_id',$this->category_type->id)
            ->pluck('product_id'); 
        }else
        {
            $product_ids = CategoryProduct::where('category_id',$this->category->id)->pluck('product_id');
        }

        
         if ($this->colorType) {
            $product_ids =Image::where('colorType',$this->colorType)->pluck('product_id');
                   
            }
        if ($this->purities) {
            $product_ids =MaterialMapProduct::whereIn('material_purity_id',$this->purities)->pluck('product_id');
                   
            }
         if($this->ringSizes)  {
            $product_ids=product::whereIn('ring_size_id',$this->ringSizes)->pluck('id');
            } 
         if($this->genders){
            $product_ids=product::where('gender',$this->genders)->pluck('id');
           }
             

        $products = product::whereIn('id',$product_ids)
        ->when(count($this->metalType)>0, function($q){
         
            $product_ids = MaterialMapProduct::whereIn('material_id', $this->metalType)->where('material_type_id',1)->pluck('product_id');
            return $q->whereIn('id',$product_ids);
        })
             
        ->paginate(10);
         
        return view('livewire.product-front-component',[
            'products'=>$products,
        ]);
    }
}
<?php

namespace App\Http\Livewire;
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

class ProductComponent extends Component
{
    use WithFileUploads, WithPagination;

    public $product_id;
    public $images1 = null;
    public $modal = false;
    public $importModal = false;
    public $deleteModal = false;
    public $deleteModalAll = false;
    public $sku;
    public $product_name;
    public $category_id;
    public $sub_category_id;
    public $sort_description;
    public $long_description;
    public $collection;
    public $ring_size_id;
    public $metal_type_id;
    public $metal_purity_id;
    public $metal_wt;
    public $metal_loss_wt;
    public $center_diamond_quality_id;
    public $center_diamond_shape_id;
    public $center_diamond_wt;
    public $side_diamond_quality_id;
    public $side_diamond_shape_id;
    public $side_diamond_wt;
    public $color_stone_quality_id;
    public $color_stone_shape_id;
    public $color_stone_wt;
    public $gold_price;
    public $diamond_price;
    public $labor_price;
    public $slug;
    public $chain_needed;
    public $main_image;
    public $amount;
    public $other_images = [];
    public $tab = 0;
    public $categories;
    public $subCategories;
    public $category_type_id;
    public $metalTypes;
    public $metal1_type_id;
    public $metal1Purities;
    public $metal1_purity_id;
    public $metal1_wt;
    public $metal2Purities;
    public $metal2_type_id;
    public $metal2_purity_id;
    public $metal2_wt;
    public $metal3Purities;
    public $metal3_type_id;
    public $metal3_purity_id;
    public $metal3_wt;
    public $diamondQualities;
    public $diamondShapes;
    public $colorStoneQualities;
    public $colorStoneShapes;
    public $ringSizes;
    public $chains;
    public $diamondCut;
    public $styles;
    public $excelFile;
    public $proceesBar;
    public $iteration = 1;
    public $main_url;
    public $white_main_image;
    public $white_main_url;
    public $white_other_images;
    public $white_images;
    public $yellow_other_images;
    public $yellow_images;
    public $rose_main_image;
    public $rose_main_url;
    public $rose_other_images;
    public $rose_images;
    public $yellow_main_image;
    public $yellow_main_url;
    public $images;
    public $status = [];
    public $related;
    public $margin;
    public $overhead;
    public $gender;
    public $product;
    public $msg;
    public $search;



    public function showModal()
    {
        $this->reset1();
        $this->categories = Category::all(); 
        $this->metalTypes = Metal::all();   
        $this->metal1Purities = Metalpurity::all();
        $this->metal2Purities = Platinumpurity::all();
        $this->metal3Purities = Silverpurity::all();
        // $this->metal1Purities = Metalpurity::where('metal_id',1)->get();
        // $this->metal2Purities = Silverpurity::where('metal_id',2)->get();
        // $this->metal3Purities = Platinumpurity::where('metal_id',3)->get();
        $this->diamondQualities = Diamondquality::all();
        $this->diamondShapes = Diamondshape::all();
        $this->colorStoneQualities = Colorstonequality::all();
        $this->colorStoneShapes = ColorStoneShape::all();
        $this->ringSizes = Ringsize::all();
        $this->chains = Chain::all();
        $this->product_id = null;
        $this->main_url = null;
        $this->images = null;      
        $this->white_main_image=null;
        $this->white_other_images=null;
        $this->yellow_main_image=null;
        $this->yellow_other_images=null;
        $this->rose_main_image=null;
        $this->rose_other_images=null;
        $this->related=null;
        $this->white_images=null;
  
        $this->modal = true;
       
    }


    public function showImportModal()
    {
        $this->importModal = true;
    }

    public function categoryChange()
    {
        
        $this->styles = Categorytype::where('category_id', $this->category_id)->get();
       
    }

    public function styleChnage()
    {
        $this->subCategories = Subcategory::where('category_type_id', $this->category_type_id)->get();
    }

    public function statusChange($id)
    {
        $d = 0;
        if ($this->status[$id] == 1) {
            $d = 1;
        }
        
        Product::find($id)->update([
            'status' => $d,
        ]);
        
    }
    public function reset1()
    {
        $this->sku = null;
        $this->product_name = null;
        $this->category_id = null;
        $this->category_type_id = null;
        $this->sub_category_id = null;
        $this->collection = null;
        $this->margin = null;
        $this->overhead = null;
        $this->ring_size_id = null;
        $this->metal_loss_wt = null;
        $this->gender = null;
        $this->labor_price = null;
        $this->chain_needed = null;
        $this->metal1_type_id = null;
        $this->metal1_purity_id=null;
        $this->metal1_wt=null;
        $this->gold_price=null;
        $this->metal2_type_id=null;
        $this->metal2_purity_id=null;
        $this->metal2_wt=null;
        $this->metal3_type_id=null;
        $this->metal3_purity_id=null;
        $this->metal3_wt=null;
        $this->center_diamond_quality_id=null;
         $this->center_diamond_shape_id=null;
        $this->center_diamond_wt=null;
        $this->side_diamond_quality_id=null;
        $this->side_diamond_shape_id=null;
        $this->side_diamond_wt=null;
        $this->diamond_price=null;
        $this->color_stone_quality_id=null;
        $this->color_stone_shape_id=null;
        $this->color_stone_wt=null;
        $this->sort_description=null;
        $this->long_description=null;


        $this->white_main_image=null;
        $this->white_other_images=null;
        $this->yellow_main_image=null;
        $this->yellow_other_images=null;
        $this->rose_main_image=null;
        $this->rose_other_images=null;
        $this->related=null;
        $this->white_images=null;

        $this->white_main_url=null;
        $this->white_images=null;
        $this->yellow_main_url=null;
        $this->yellow_images=null;
        $this->rose_main_url=null;
        $this->rose_images=null;

    }

    public function image($id)
    {
        $this->tab = $id;
        $this->product_id = $id;
       
    }

    public function addProduct()
    {
    
        $this->validate([
            'sku' => 'required',
            'product_name' => 'required',
            'category_id' => 'required',
            'category_type_id' => 'required',
            'sub_category_id' => 'required',
            
        ]);
        
       
        // DB::transaction(function () {
            $this->slug = Str::slug($this->product_name);
            $url = null;
            $count = 1;
            $month = strtolower(date('M'))."_".strtolower(date('Y'));
            $product = Product::create([
                'sku' => $this->sku,
                'product_name' => $this->product_name,
                'sort_description' => $this->sort_description,
                'long_description' => $this->long_description,
                'collection' => $this->collection,
                'margin' => $this->margin,
                'overhead' => $this->overhead,
                'ring_size_id' => $this->ring_size_id,
                'metal_loss_wt' => $this->metal_loss_wt,   
                'labor_price' => $this->labor_price,
                'slug' => $this->slug,
                'gender' => $this->gender,
                'related' => $this->related,
                'chain_needed' => $this->chain_needed,
                
            ]);

            if ($this->metal1_type_id) {
          
                MaterialMapProduct::create([
                    'product_id' => $product->id,
                    'material_id' => $this->metal1_type_id,
                    'material_purity_id' => $this->metal1_purity_id,
                    'material_wt' => $this->metal1_wt,
                    'material_type_id' => 1,
                ]);
            }
           
            if ($this->metal2_type_id) {
                
                MaterialMapProduct::create([
                    'product_id' => $product->id,
                    'material_id' => $this->metal2_type_id,
                    'material_purity_id' => $this->metal2_purity_id,
                    'material_wt' => $this->metal2_wt,
                    'material_type_id' => 1,
                ]);
            }
            if ($this->metal3_type_id) {
                MaterialMapProduct::create([
                    'product_id' => $product->id,
                    'material_id' => $this->metal3_type_id,
                    'material_purity_id' => $this->metal3_purity_id,
                    'material_wt' => $this->metal3_wt,
                    'material_type_id' => 1,
                ]);
            }

            if ($this->center_diamond_shape_id) {
                MaterialMapProduct::create([
                    'product_id' => $product->id,
                    'material_id' => $this->center_diamond_shape_id,
                    'material_purity_id' => $this->center_diamond_quality_id,
                    'material_wt' => $this->center_diamond_wt,
                    'material_price' => $this->diamond_price,
                    'material_type_id' => 2,
                ]);
            }

            if ($this->side_diamond_shape_id) {
                MaterialMapProduct::create([
                    'product_id' => $product->id,
                    'material_id' => $this->side_diamond_shape_id,
                    'material_purity_id' => $this->side_diamond_quality_id,
                    'material_wt' => $this->side_diamond_wt,
                    'material_price' => $this->diamond_price,
                    'material_type_id' => 2,
                ]);
            }

            if ($this->color_stone_shape_id) {
                MaterialMapProduct::create([
                    'product_id' => $product->id,
                    'material_id' => $this->color_stone_shape_id,
                    'material_purity_id' => $this->color_stone_quality_id,
                    'material_wt' => $this->color_stone_wt,
                    'material_type_id' => 3,
                ]);
            }
            
            CategoryProduct::create([                
                'category_id' => $this->category_id,
                'subcategory_id' => $this->sub_category_id,
                'categorytype_id' => $this->category_type_id,
                'product_id' => $product->id,
            ]);
           
            if ($this->white_main_image) {
                
                $name = $product->sku . "_" . $count .'m'. '.' . $this->white_main_image->getClientOriginalExtension();
                $url = $this->white_main_image->storeAs('products/' . $month, $name, 'public');
                
                Image::create([
                    'product_id' => $product->id,
                    'url' => $url,
                    'colorType' => 'w',
                    'is_main'=>1,
                   
                ]);
                
                if ($this->white_other_images) {
                    
                    foreach ($this->white_other_images as $key => $image) {
                        $name = $product->sku . "_" . $count . '.' . $image->getClientOriginalExtension();
                        $url = $image->storeAs('products/' . $month, $name, 'public');
                        Image::create([
                            'url' => $url,
                            'colorType' => 'w',
                            'product_id' => $product->id,
                            'sr_no' => $count,
                        
                        ]);
                        $count++;
                    }
                }
            }
            if ($this->yellow_main_image) {
                $name = $product->sku . "_" . $count .'m'. '.' . $this->yellow_main_image->getClientOriginalExtension();
                $url = $this->yellow_main_image->storeAs('products/' . $month, $name, 'public');
                Image::create([
                    'product_id' => $product->id,
                    'url' => $url,
                    'colorType' => 'y',
                    'is_main'=>1,
                    
                ]);
                if ($this->yellow_other_images) {
                    foreach ($this->yellow_other_images as $key => $image) {
                        $name = $product->sku . "_" . $count . '.' . $image->getClientOriginalExtension();
                        $url = $image->storeAs('products/' . $month, $name, 'public');
                        Image::create([
                            'url' => $url,
                            'colorType' => 'y',
                            'product_id' => $product->id,
                            'sr_no' => $count,
                          
                        ]);
                        $count++;
                    }
                }
            }
            if ($this->rose_main_image) {
                $name = $product->sku . "_" . $count . 'm' . '.' . $this->rose_main_image->getClientOriginalExtension();
                $url = $this->rose_main_image->storeAs('products/' . $month, $name, 'public');
                Image::create([
                    'product_id' => $product->id,
                    'url' => $url,
                    'colorType' => 'r',
                    'is_main'=>1,
                    
                ]);
                if ($this->rose_other_images) {
                    foreach ($this->rose_other_images as $key => $image) {
                        $name = $product->sku . "_" . $count . '.' . $image->getClientOriginalExtension();
                        $url = $image->storeAs('products/' . $month, $name, 'public');
                        Image::create([
                            'url' => $url,
                            'colorType' => 'r',
                            'product_id' => $product->id,
                            'sr_no' => $count,
                           
                        ]);
                        $count++;
                    }
                }
            }
            $this->updatePrice($product->id);
        // });

        $this->modal = false;
        $this->msg="Product added succesfully";
       
    }

    public function updatedProductName()
    {
        $this->slug = Str::slug($this->product_name);
    }

    public function editModal($id)
    {
      
        
        $this->product_id = $id;
        $this->white_main_url = Image::where('product_id', $id)->where('is_main', 1)->where('colorType', 'w')->first()->url ?? "";
        $this->white_images = Image::where('product_id', $id)->where('is_main', null)->where('colorType', 'w')->get();
        $this->yellow_main_url = Image::where('product_id', $id)->where('is_main', 1)->where('colorType', 'y')->first()->url ?? "";
        $this->yellow_images = Image::where('product_id', $id)->where('is_main', null)->where('colorType', 'y')->get();

        $this->rose_main_url = Image::where('product_id', $id)->where('is_main', 1)->where('colorType', 'r')->first()->url ?? "";
        $this->rose_images = Image::where('product_id', $id)->where('is_main', null)->where('colorType', 'r')->get();
        $product = Product::find($id);
        $categoryProduct = CategoryProduct::where('product_id', $id)->first() ;

        $metal1 = MaterialMapProduct::where('product_id', $id)
            ->where('material_type_id', 1)
            ->where('material_id',1)->first();
 
        
        $metal2 = MaterialMapProduct::where('product_id', $product->id)
            ->where('material_type_id', 1)
            ->where('material_id', 2)->first();
            
        $metal3 = MaterialMapProduct::where('product_id', $product->id)
            ->where('material_type_id', 1)
            ->where('material_id', 3)->first();
     
        $centerDia = MaterialMapProduct::where('product_id', $product->id)
            ->where('material_type_id', 2)
            ->where('center_stone', 1)->first();
        $sideDia = MaterialMapProduct::where('product_id', $product->id)
            ->where('material_type_id', 2)
            ->where('center_stone', 0)->first();
        $colorStone = MaterialMapProduct::where('product_id', $product->id)
            ->where('material_type_id', 3)
            ->first();

        $this->sku = $product->sku;
        $this->product_name = $product->product_name;
        $this->category_id = $categoryProduct->category_id ?? null;

        $this->category_type_id = $categoryProduct->categorytype_id ?? null;
        $this->sub_category_id = $categoryProduct->subcategory_id ?? null;
        $this->sort_description = $product->sort_description;
        $this->long_description = $product->long_description;
        $this->collection = $product->collection;
        $this->ring_size_id = $product->ring_size_id;

        $this->metal1_type_id = $metal1->metal->id ?? null;
        $this->metal1_purity_id = $metal1->metalPurity->id ?? null;
        $this->metal1_wt = $metal1->material_wt ?? null;

        $this->metal2_type_id = $metal2->metal->id ?? null;
        $this->metal2_purity_id = $metal2->metalPurity->id ?? null;
        $this->metal2_wt = $metal2->material_wt ?? null;

        $this->metal3_type_id = $metal3->metal->id ?? null;
        $this->metal3_purity_id = $metal3->metalPurity->id ?? null;
        $this->metal3_wt = $metal3->material_wt ?? null;

        $this->margin = $product->margin;
        $this->overhead = $product->overhead;
        $this->metal_loss_wt = $product->metal_loss_wt;

        $this->center_diamond_quality_id = $centerDia->diamondQuality->id ?? null;
        $this->center_diamond_shape_id = $centerDia->diamondShape->id ?? null;
        $this->center_diamond_wt = $centerDia->material_wt ?? null;
        $this->diamond_price = $centerDia->material_price ?? null;
        $this->side_diamond_quality_id =  $sideDia->diamondQuality->id ?? null;
        $this->side_diamond_shape_id = $sideDia->diamondShape->id ?? null;
        $this->side_diamond_wt = $sideDia->material_wt ?? null;
        $this->diamond_price = $sideDia->material_price ?? null;

        $this->color_stone_quality_id = $colorStone->colorStoneQuality->id ?? null;
        $this->color_stone_shape_id = $colorStone->colorStoneShape->id ?? null;
        $this->color_stone_wt = $colorStone->material_wt ?? null;

        
        $this->labor_price = $product->labor_price;
        $this->chain_needed = $product->chain_needed;
        $this->slug = $product->slug;
        $this->gender = strtolower($product->gender);
        $this->related = $product->related;
        $this->showModalEdit();
        $this->categoryChange();
        $this->styleChnage();
    }
    
    public function showModalEdit()
    {
        // dd('test');
        $this->categories = Category::all();
        $this->metalTypes = Metal::all();
        $this->metal1Purities = Metalpurity::all();
        $this->metal2Purities = Platinumpurity::all();
        $this->metal3Purities = Silverpurity::all();
        // $this->metal1Purities = Metalpurity::where('metal_id',1)->get();
        // $this->metal2Purities = Silverpurity::where('metal_id',2)->get();
        // $this->metal3Purities = Platinumpurity::where('metal_id',3)->get();
        $this->diamondQualities = Diamondquality::all();
        $this->diamondShapes = Diamondshape::all();
        $this->colorStoneQualities = Colorstonequality::all();
        $this->colorStoneShapes = ColorStoneShape::all();
        $this->ringSizes = Ringsize::all();
        $this->chains = Chain::all();
        
        $this->modal = true;
    }

    public function updateProduct()
    {
        $this->validate([
            'sku' => 'required',
            'product_name' => 'required',
            'category_id' => 'required',
            'category_type_id' => 'required',
            'sub_category_id' => 'required',
        ]);
        DB::transaction(function () {
            $this->slug = Str::slug($this->product_name);
            $url = null;
            $count = 1;
            $month = strtolower(date('M'));
            
            Product::find($this->product_id)->update([
                'sku' => $this->sku,
                'product_name' => $this->product_name,
                'sort_description' => $this->sort_description,
                'long_description' => $this->long_description,
                'collection' => $this->collection,
                'margin' => $this->margin,
                'overhead' => $this->overhead,
                'ring_size_id' => $this->ring_size_id,
                'metal_loss_wt' => $this->metal_loss_wt,
                'labor_price' => $this->labor_price,
                'slug' => $this->slug,
                'gender' => $this->gender,
                'related' => $this->related,
                'chain_needed' => $this->chain_needed,
            ]);
            
           

           
            if ($this->metal1_type_id) {
               
                MaterialMapProduct::where('product_id', $this->product_id)
                    ->where('material_id', $this->metal1_type_id)
                    ->where('material_type_id', 1)
                    ->update([
                        'material_id' => $this->metal1_type_id,
                        'material_purity_id' => $this->metal1_purity_id,
                        'material_wt' => $this->metal1_wt,
                    ]);
            }
           
            if ($this->metal2_type_id) {
              
                MaterialMapProduct::where('product_id', $this->product_id)
                    ->where('material_id', $this->metal2_type_id)
                    ->where('material_type_id', 1)
                    ->update([
                        'material_id' => $this->metal2_type_id,
                        'material_purity_id' => $this->metal2_purity_id,
                        'material_wt' => $this->metal2_wt,
                    ]);
            }
            if ($this->metal3_type_id) {
               
                MaterialMapProduct::where('product_id', $this->product_id)
                    ->where('material_id', $this->metal3_type_id)
                    ->where('material_type_id', 1)
                    ->update([
                        'material_id' => $this->metal3_type_id,
                        'material_purity_id' => $this->metal3_purity_id,
                        'material_wt' => $this->metal3_wt,
                    ]);
            }

            if ($this->center_diamond_shape_id) {
                MaterialMapProduct::where('product_id', $this->product_id)
                    ->where('material_id', $this->center_diamond_shape_id)
                    ->where('material_type_id', 2)
                    ->where('center_stone', 1)
                    ->update([
                        'material_id' => $this->center_diamond_shape_id,
                        'material_purity_id' => $this->center_diamond_quality_id,
                        'material_wt' => $this->center_diamond_wt,
                        'material_price' => $this->diamond_price,
                    ]);
            }

            if ($this->side_diamond_shape_id) {
                MaterialMapProduct::where('product_id', $this->product_id)
                    ->where('material_id', $this->side_diamond_shape_id)
                    ->where('material_type_id', 2)
                    ->where('center_stone', 0)
                    ->update([
                        'material_id' => $this->side_diamond_shape_id,
                        'material_purity_id' => $this->side_diamond_quality_id,
                        'material_wt' => $this->side_diamond_wt,
                        'material_price' => $this->diamond_price,
                    ]);
            }

            if ($this->color_stone_shape_id) {
                MaterialMapProduct::where('product_id', $this->product_id)
                    ->where('material_id', $this->color_stone_shape_id)
                    ->where('material_type_id', 3)
                    ->where('center_stone', 0)
                    ->update([
                        'material_id' => $this->color_stone_shape_id,
                        'material_purity_id' => $this->color_stone_quality_id,
                        'material_wt' => $this->color_stone_wt,
                    ]);
            }

            CategoryProduct::where('product_id', $this->product_id)->update([
                'category_id' => $this->category_id,
                'subcategory_id' => $this->sub_category_id,
                'categorytype_id' => $this->category_type_id,
                
            ]);
            

            $product = Product::find($this->product_id);
           
            if ($this->white_main_image) {
                
                $name = $product->sku . "_" . $count .'m'. '.' . $this->white_main_image->getClientOriginalExtension();
                $url = $this->white_main_image->storeAs('products/' . $month, $name, 'public');
               
                Image::where('product_id', $this->product_id)
                ->where('is_main', 1)
                ->where('colorType','w')
                ->update([
                   
                    'url' => $url,
                    'colorType' => 'w',
                ]);
             
               
            }
            if ($this->white_other_images) {
                
                foreach ($this->white_other_images as $key => $image) {
                    $name = $product->sku . "_" . $count . '.' . $image->getClientOriginalExtension();
                    $url = $image->storeAs('products/' . $month, $name, 'public');
                    Image::where('product_id', $this->product_id)->where('is_main', null)
                    ->where('colorType','w')
                    ->delete();
                    Image::create([
                        'url' => $url,
                        'colorType' => 'w',
                        'product_id' => $product->id,
                        'sr_no' => $count,
                     
                    ]);
                    $count++;
                }
            }
            if ($this->yellow_main_image) {
               
                $name = $product->sku . "_" . $count .'m'. '.' . $this->yellow_main_image->getClientOriginalExtension();
                $url = $this->yellow_main_image->storeAs('products/' . $month, $name, 'public');
                Image::where('product_id', $this->product_id)
                ->where('is_main', 1)
                ->where('colorType','y')
                ->update([
                    'url' => $url,
                    'colorType' => 'y',
                   
                ]);
                
            }
            if ($this->yellow_other_images) {
                
                foreach ($this->yellow_other_images as $key => $image) {
                    $name = $product->sku . "_" . $count . '.' . $image->getClientOriginalExtension();
                    $url = $image->storeAs('products/' . $month, $name, 'public');
                    Image::where('product_id', $this->product_id)
                    ->where('is_main', null)
                    ->where('colorType','y')
                    ->delete();
                    Image::create([
                        'url' => $url,
                        'colorType' => 'y',
                        'product_id' => $product->id,
                        'sr_no' => $count,
                       
                    ]);
                    $count++;
                }
            }
            if ($this->rose_main_image) {
                $name = $product->sku . "_" . $count .'m'. '.' . $this->rose_main_image->getClientOriginalExtension();
                $url = $this->rose_main_image->storeAs('products/' . $month, $name, 'public');
                Image::where('product_id', $this->product_id)
                ->where('is_main', 1)
                ->where('colorType','r')
                ->update([
                    'url' => $url,
                    'colorType' => 'r',
                   
                ]);
                if ($this->rose_other_images) {
                    foreach ($this->rose_other_images as $key => $image) {
                        $name = $product->sku . "_" . $count . '.' . $image->getClientOriginalExtension();
                        $url = $image->storeAs('products/' . $month, $name, 'public');
                        Image::where('product_id', $this->product_id)
                        ->where('is_main', null)
                        ->where('colorType','r')
                        ->delete();
                        Image::create([
                            'url' => $url,
                            'colorType' => 'r',
                            'product_id' => $product->id,
                            'sr_no' => $count,
                           
                        ]);
                        $count++;
                    }
                }
            }
           
        });
        $this->updatePrice($this->product_id);
        $this->modal = false;
         $this->msg="Product updated succesfully";
    }

    public function removeImage($id)
    {

        Image::find($id)->delete();
    }
   
    
     public function delete()
    {
        $this->deleteModalAll=true;
    }
    
     public function deleteAll()
    {
        Product::whereNotNull('id')->delete();
        Image::whereNotNull('id')->delete();
        $this->msg="All product deleted succesfully";
        $this->deleteModalAll=false;
    }


    public function deleteOne($id)
    {        
        $this->deleteModal=true;
        $this->product_id=$id;
    }

    public function deleteRow()
    {   

        
        Product::find($this->product_id)->delete();
        $this->msg="Product deleted succesfully";
        $this->deleteModal=false;
     
    }

    // public function deleteRow($id)
    // {
    //     Product::find($id)->delete();
    //     return redirect('products')->with('msg','Product deleted succesfully');
        
    // }
    
    
    // public function deledeleteModalAllteRow($id)
    // {
    //     Product::where('id', $id)->first()->delete();
    // }
    // public function deleteModalShow($id)
    // {
    //     Product::where('id', $id)->first()->delete();
    // }

    public function productImport()
    {
        $this->validate([
            'excelFile' => 'required',
        ]);

        if (!$this->proceesBar) {
            Excel::import(new ProductImport, $this->excelFile->store('file'));
            $this->proceesBar = 1;
            $this->excelFile = null;
            $this->importModal = false;
        }
       
        $this->excelFile = null;
        return redirect(asset('admin'));
    }

    public function currency()
    {
        return Currency::where('status', 1)->first();
    }

    public function updatePrice($id)
    {
        $product = Product::find($id);
        $currency = $this->currency();
        $metal = MaterialMapProduct::where('product_id', $product->id)->where('material_type_id', 1)->where('material_id', 1)->first();
        $silver = MaterialMapProduct::where('product_id', $product->id)->where('material_type_id', 1)->where('material_id', 3)->first();
        $platinum = MaterialMapProduct::where('product_id', $product->id)->where('material_type_id', 1)->where('material_id', 2)->first();
        $dia = MaterialMapProduct::where('product_id', $product->id)->where('material_type_id', 2)->first();
        $cs = MaterialMapProduct::where('product_id', $product->id)->where('material_type_id', 3)->first();
        $per_gram = 0;
        $metal_wt = 0;
        $metal_price = 0;
        if ($metal) {
            $kitco = Kitco::where('metal_type', $metal->material_id)->first();
            $ctr = 1;
            if ($metal->material_purity_id == 4) {
                $per_gram = $kitco->kt22;
            } elseif ($metal->material_purity_id == 1) {
                $per_gram = $kitco->kt18;
            } elseif ($metal->material_purity_id == 2) {
                $per_gram = $kitco->kt14;
            } elseif ($metal->material_purity_id == 3) {
                $per_gram = $kitco->kt10;
            }
            $metal_price += $per_gram * $metal->material_wt;
        }
        if ($silver) {
            $kitco = Kitco::where('metal_type', $silver->material_id)->first();
            $per_gram = $kitco->rate;
            $metal_price += $per_gram * $silver->material_wt;
        }
        if ($platinum) {
            $kitco = Kitco::where('metal_type', $platinum->material_id)->first();
            $per_gram = $kitco->rate;
            $metal_price += $per_gram * $platinum->material_wt;
        }

        $metal_price = $metal_price + ($metal_price * 10 / 100);
        $total = $metal_price  + $product->labor_price;
        if ($dia) {
            $total += $dia->material_price;
        }
        if ($cs) {
            $total += $cs->material_price;
        }
        $total = $total + ($total * $product->margin / 100);
        $total = $total + ($total * $product->overhead / 100);
        if ($currency && ($currency->id == 1 || $currency->id == 3)) {
            $total = $total * $currency->exchange_rate;
            $total = round($total, -1);
        }
            Product::where('id', $product->id)->update([
                'total' => $total,
            ]);
        
    }

    public function render()
    {
        return view('livewire.product-component',[
            'products'=>product::when($this->search,function($qs){
                $qs->where('sku','LIKE','%'.$this->search.'%')->orWhere('product_name','LIKE','%'.$this->search.'%');
            })->paginate(15),
        ]);
       }



        
}

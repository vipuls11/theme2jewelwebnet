<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Session;

class SingleComponent extends Component
{

    public $product_id;

    public function mount($product_id)
    {
        $this->product_id =$product_id;
    }

    public function addtoCart($id)
    {
    
        session()->push('cart', $id);
        return redirect(request()->header('Referer'));
    }

    
    public function render()
    {  
         $session_id=Session::get('session_id');

        $recentProductIds=DB::table('recently_viewed_products')->orderBy('id', 'desc')->where('session_id',$session_id)->select('product_id')->
        get()->take(4)
        ->pluck('product_id');  
      
        //  $recentProductIds=DB::table('recently_viewed_products')->select('product_id')->
        // where('product_id','!=',$id)->where('session_id',$session_id)->inRandomOrder()->get()->take(4)
        // ->pluck('product_id');
        $recentViewedProduct=product::whereIn('id',$recentProductIds)->get();

        return view('livewire.single-component',[
            'recentproducts'=>$recentViewedProduct,
        ]);
    }
}

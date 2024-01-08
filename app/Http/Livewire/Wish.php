<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Wish extends Component
{
    public function render()
    {
        return view('livewire.wish');
    }




    
     
    public function addtoCart($id)
    {
        foreach (session()->get('wish') as $key => $item) {
            if ($id === $item) {
                        session()->push('cart', $id);

                break;
            }
        }
        return redirect(asset('cart'));
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


}

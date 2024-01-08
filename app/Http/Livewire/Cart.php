<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        return view('livewire.cart');
    }
    public function removetoCart($id)
    {
        
        foreach (session()->get('cart') as $key => $item) {
            if ($id === $item) {
                session()->pull('cart.' . $key);
                break;
            }
        }
        return redirect(request()->header('Referer'));
    
    }

public function movetoWish($id)
    {
        session()->push('wish', $id);
        $this->removetoCart($id);
        return redirect(request()->header('Referer'));
    }
}

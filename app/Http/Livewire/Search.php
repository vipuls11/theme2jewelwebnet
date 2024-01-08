<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use App\Models\Product;

class Search extends Component
{
    public $searchTerm;
public function saveSearch(){

    Event::create([                
                'search' => $this->searchTerm,
                ]);

}


    public function render(){
        $searchTerm = '%' . $this->searchTerm . '%';
        
        $data = [
            "events" => Event::where('title', 'like', $searchTerm)->get()
        ];

        return view('livewire.search', $data);
    }
}

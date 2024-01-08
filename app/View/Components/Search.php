namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class Search extends Component
{
    public $searchTerm;

    public function render(){
        $searchTerm = '%' . $this->searchTerm . '%';
        
        $data = [
            "events" => Event::where('title', 'like', $searchTerm)->get()
        ];

        return view('livewire.search', $data);
    }
}
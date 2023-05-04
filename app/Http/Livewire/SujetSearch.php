<?php

namespace App\Http\Livewire;

use App\Models\Sujet;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class SujetSearch extends Component
{
    use WithPagination;

    public string $search ='' ;
 
    public function render()
    {
        
       
        return view('livewire.sujet-search',[
            'sujets' => Sujet::where('title','LIKE',"%{$this->search}%")->paginate(10),
           'newsujets' => Sujet::all()->reverse()->take(5),
            
        ]);
    }

    public function paginationView()
    {
            return 'livewire.paginate';
    }
    
}

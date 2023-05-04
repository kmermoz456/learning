<?php

namespace App\Http\Livewire;

use App\Models\Propo;
use Livewire\Component;

class PropoList extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.propo-list',[
            'propos' => Propo::where('content','LIKE',"%{$this->search}%")->get(),

        ]);
    }

    public function delete($id)
    {
         Propo::find($id)->delete();
        session()->flash('message', 'Proposition supprimer');
        
    }
}

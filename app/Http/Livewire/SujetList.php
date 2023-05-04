<?php

namespace App\Http\Livewire;

use App\Models\Sujet;
use Livewire\Component;
use Livewire\WithPagination;

class SujetList extends Component
{
    use WithPagination;
    public $search ='';
    
    public function render()
    {
        return view('livewire.sujet-list',[
            'sujets' => Sujet::where('title','LIKE',"%{$this->search}%")->paginate(5),
        ]);
    }

    public function delete($id)
    {
        $sujet = Sujet::find($id)->delete();
        session()->flash('message', 'Sujet supprimer');
        
    }
}

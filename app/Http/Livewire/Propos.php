<?php

namespace App\Http\Livewire;

use App\Models\Propo;
use Livewire\Component;
use Livewire\WithPagination;

class Propos extends Component
{
    use WithPagination;
    public $search ='';
    public $content;
    public $point;
    public $question_id;
    public $idp;

    public function store()
    {

            Propo::create([
                'content' => $this->content,
                'point' => $this->point,
                'question_id' => $this->question_id
            ]);

        session()->flash('message', 'Proposition Créée avec succès');
        $this->reset('content');
        

    }

    
    public function render()
    {
        return view('livewire.propos',[
            'propo' =>Propo::where('id',$this->idp)->first(),
        ]);
    }
}

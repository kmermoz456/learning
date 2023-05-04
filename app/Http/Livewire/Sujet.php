<?php

namespace App\Http\Livewire;

use App\Models\Sujet as ModelsSujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Sujet extends Component
{
    
     public $ide;
   

     
    

        
    
    public function render()
    {
        return view('livewire.sujet',[
            'sujet' => ModelsSujet::find($this->ide),
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

use function PHPSTORM_META\type;

class Questions extends Component
{
    public $content;
    public $point;
    public $type;
    public $good_ans;
    public $sujet_id;
    public $idq;

    public function store()
    {

            Question::create([
                'content' => $this->content,
                'type' => $this->type,
                'point' => $this->point,
                'good_ans' => $this->good_ans,
                'sujet_id' => $this->sujet_id
            ]);

        session()->flash('message', 'Question Créée avec succès');
        $this->reset('content','good_ans',);
        

    }

    public function update()
    {

            Question::find($this->idq)->update([
                'content' => $this->content,
                'type' => $this->type,
                'point' => $this->point,
                'good_ans' => $this->good_ans,
                'sujet_id' => $this->sujet_id
            ]);

        session()->flash('message', 'Question Créée avec succès');
        $this->reset('content','good_ans',);
        

    }

    public function render()
    {
        return view('livewire.questions',[
            'question' => Question::where('id',$this->idq)->first(), 
        ]);
    }
}

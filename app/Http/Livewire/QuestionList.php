<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class QuestionList extends Component
{
    use WithPagination;
    public $search ='';
    
    public function render()
    {
        return view('livewire.question-list',[
            'questions' => Question::where('content','LIKE',"%{$this->search}%")->paginate(5),

        ]);
    }

    public function delete($id)
    {
         Question::find($id)->delete();
        session()->flash('message', 'Question supprimer');
        
    }
}

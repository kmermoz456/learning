<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Question;
use App\Models\Sujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SujetController extends Controller
{
    public $send = 0;
    
    public function demo()
    {
        $id = 2;
        return view('compo',[
            'sujet' => Sujet::find($id),
            'questions' => Question::where('sujet_id',$id)
            ->inRandomOrder()
            ->get(),
            'send' => $this->send,
        ]);
    }

    public function correction($id ,Request $request)
    {
       
        $note = 0;
        $total = 0;
        $error = [];
        foreach($request->except('_token') as $kq=>$question)
        {
            if(is_array($question))
            {

            if(count($question) == Question::find($kq)->good_ans && (!in_array(0,$question)) )
            {
                $note += Question::find($kq)->point; 

            }else{
                $note -= Question::find($kq)->point; 
                $error[] = Question::find($kq);
                
            }
        }else{
            if(Question::find($kq)->good_ans != $question)
            {
                $note += Question::find($kq)->point;
            }else{
                $note -= Question::find($kq)->point;
                $error[] = Question::find($kq);


            }
        }
        }
        if(Auth()->user()){

            if(!empty(Note::where('title',Sujet::find($id)->title)->first()))
            {
                Note::where('title',Sujet::find($id)->title)->first()->update([
                    'notes' => $note.'/'.count(Sujet::find($id)->questions),

                ]);

                

            }else{

                    
                      
            Note::create([
                'title' => Sujet::find($id)->title,
                'notes' => $note.'/'.count(Sujet::find($id)->questions),
                'faute' => count($error),
                'user_id' => Auth()->user()->id
            ]);

        }
        }
    
        return view('error',[
            'note' => $note,
            'questions' => $error,
            'total' => count($request->except('_token')),
        ]);
    }
    public function compo($title, $id)
    {
        
        if(!Gate::allows('abonner'))
        {
            return view('abonnement');
        }
        return view('compo',[
            'sujet' => Sujet::find($id),
            'questions' => Question::where('sujet_id',$id)
            ->inRandomOrder()
            ->get(),
            'send' => $this->send,
            
            
        ]);
    }

    public function note()
    {
        $notes = Note::where('user_id',Auth()->user()->id)->get();
        return view('note',[
            'notes' => $notes
        ]);
    }

}

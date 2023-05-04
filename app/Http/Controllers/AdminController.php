<?php

namespace App\Http\Controllers;

use App\Models\Abonner;
use App\Models\Image;
use App\Models\Propo;
use App\Models\Question;
use App\Models\Solde;
use App\Models\Sujet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public $montant = 0;

  public function codelist()
  {
      return view('admin.tickets',[
          'tickets' => Abonner::paginate(50),
      ]);
  }
  
    public function todo($actions)
    {
        
        $soldes = Solde::all();
        foreach($soldes as $solde)
  {
    $this->montant +=$solde->montant;
  }
        return view('admin.dashboard',[
            'actions'=> $actions,
            'montant' => $this->montant.' CFA',
        ]);
    }
   
        public function store($actions, Request $request)
        {

            if($actions === 'sujet')
            {
                Validator::make($request->all() ,[
                    'title' => ['required', 'string', 'max:255'],
                ])->validate();
        
                    Sujet::create([
                        'title' => str_replace(' ','_',$request->title),
                        'niveau' => $request->niveau,
                        'ue'=> $request->ue,
                        'online' => (int)$request->online
                    ]);

            }
            

            if($actions === 'questions')
            {

            }



            if($actions === 'propos')
            {

            }
           return redirect('dashboard/'.$actions)->with('status','Sujet sauvegarder');
            
        }

        public function sujetupdate(Request $request)
        {
                
                Sujet::find($request->id)->update([
                    'title' => $request->title,
                        'niveau' => $request->niveau,
                        'ue'=> $request->ue,
                        'online' => (int)$request->online
               
                ]);

           return redirect('dashboard/sujet');
    }

    public function questionupdate(Request $request)

    {
            
            Question::find($request->id)->update([
                'content' => $request->content,
                    'point' => $request->point,
                    'type' => $request->type,
                    'good_ans'=> $request->good_ans,
                    'sujet_id'=>$request->sujet_id,
           
            ]);

       return redirect('dashboard/questions');

}

public function propoupdate(Request $request)

{
        Propo::find($request->id)->update([
            'content' => $request->content,
                'point' => $request->point,
                'question_id'=>$request->question_id,
       
        ]);

   return redirect('dashboard/propos');
}
public function uploadimage(Request $request)
{
    //Storage::disk('public');
    $file = $request->file('image');
    $filename =$file->getClientOriginalName();
    Image::create([
        'path' => $filename,
        'question_id' => $request->question_id,
    ]);

 return view('admin.dashboard');
    
}
}
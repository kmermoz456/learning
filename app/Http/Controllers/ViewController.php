<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Sujet;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;

class ViewController extends Controller
{
    public function index()
    {

        return view('home');

    }

    public function sujet()
    {
      
        return view('sujet');
    }

  public function abonnement($type)
  {
      $prix = 0;
      if($type === 'annuel')
      {
        $prix = 1500;
      }elseif($type === 'trimestre')
      
      {
        $prix = 1000;
      }

      if(is_string($type) && in_array($type,['trimestre','annuel'],))

      {
      return view('abonnement',[
          'prix' => $prix
      ]);
  } else
  {
    return abort('404');
}
}

public function sujetue($ue)
{
  $sujets = Sujet::where('ue',$ue)->paginate(10);
  return view('sujet-show',[
    'sujets' => $sujets
  ]);
}

}

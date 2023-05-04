<?php

namespace App\Http\Controllers;

use App\Models\Abonner;
use App\Models\Solde;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function abonnement(Request $request)
    {
       $codes =  Abonner::where('numero_ticket',$request->code)->first();
       $status = 0;
        if($codes)
        {
            $user = User::find(Auth()->user()->id);
            $user->update([
                'status' => 1,
            ]);

            Solde::create([
                'montant' => $codes->montant,
                'user_id' => Auth()->user()->id,
            ]);

            $codes->delete($codes->id);
            $status = 1;
            
        }
        return view('dashboard',['status' => $status]);

        
    }
}

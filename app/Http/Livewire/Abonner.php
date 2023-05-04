<?php

namespace App\Http\Livewire;

use App\Models\Abonner as ModelsAbonner;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Faker\Factory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutEvents;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Abonner extends Component
{
    use WithPagination;
    use WithFaker;


        public $montant;
        public $numero;
        public $code;
        public $status= 0;
        public $send = false;
        public function paginationView()
        {
                return 'livewire.paginate';
        }
    public function abonner()
    {
        $faker = Factory::create();
        
        if($this->montant)
        {
            
        $this->code = $faker->swiftBicNumber;
           

            ModelsAbonner::create([
                'montant' => $this->montant,
                'numero_ticket' => $this->code,
                
            ]);
            $this->status = 1;


        }


        $this->send = true;
        return view('livewire.abonner',[
            'code' => $this->code,
            'status' => $this->status,
            'send' => $this->send,
        ]);
    }
    

    public function render()
    {
        return view('livewire.abonner',[
            'tickets' => ModelsAbonner::paginate(10),
        ]);
    }
}

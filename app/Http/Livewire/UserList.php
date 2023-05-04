<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    public function paginationView()
    {
            return 'livewire.paginate';
    }

    public $name ='';

    public function render()
    {
        return view('livewire.user-list',[
            'users' => User::where('name','LIKE',"%{$this->name}%")->paginate(5)
        ]);
    }
}

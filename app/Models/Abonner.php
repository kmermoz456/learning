<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonner extends Model
{

    protected $fillable = ['montant','numero','numero_ticket'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

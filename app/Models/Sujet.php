<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;
    protected $fillable = ['title','ue','online','niveau'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

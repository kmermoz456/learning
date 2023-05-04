<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['content','type','point','good_ans','sujet_id'];
    public function sujet()
    {
        return $this->BelongsTo(Sujet::class);
    }

    public function propos()
    {
        return $this->hasMany(Propo::class);
    }
    

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}

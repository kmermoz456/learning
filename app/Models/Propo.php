<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Propo extends Model
{
    use HasFactory;
    protected $fillable = ['content','question_id','point'];
    public function question()
    {
        return $this->BelongsTo(Question::class);
    }
}

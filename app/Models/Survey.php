<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\User;
use App\Models\Transaction;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'industry',
        'title',
        'body',
        'completed',
        'reward',
        'expiryreward',
        'expiry_at'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

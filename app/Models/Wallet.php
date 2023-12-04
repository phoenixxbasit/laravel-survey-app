<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        "amount"
    ];

    public function transactions()
    {
        return $this->belongsTo(User::class);
    }
}

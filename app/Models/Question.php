<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        "content",
        "type"
    ];

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }
}

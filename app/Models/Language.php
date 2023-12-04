<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "iso_code"
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}

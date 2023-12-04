<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Referral;

class ReferralRequestHistory extends Model
{
    use HasFactory;

    public function referrals()
    {
        return $this->hasMany(Referral::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

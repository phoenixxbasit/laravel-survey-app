<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ReferralRequestHistory;

class Referral extends Model
{
    use HasFactory;
    protected $fillabe = [
        'link'
    ];

    public function referralrequesthistory()
    {
        return $this->belongsTo(ReferralRequestHistory::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['amortization_id', 'amount', 'profile_id', 'state'];

    public function amortization(){
        return $this->belongsTo(Amortization::class);
    }
}

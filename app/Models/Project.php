<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'wallet_balance', 'promoter_id'];

    public function amortizations()
    {
        return $this->hasMany(Amortization::class);
    }
}

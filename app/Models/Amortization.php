<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amortization extends Model
{
    protected $fillable = ['schedule_date', 'state', 'amount', 'project_id'];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
}

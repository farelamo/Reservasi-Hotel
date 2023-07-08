<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'investor_id', 'state_id', 'name', 'phone', 
        'passport_number', 'country', 'vaccine1',
        'vaccine2', 'vaccine3', 'start', 'end'
    ];

    public function investor()
    {
        return $this->belongsTo(Investor::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}

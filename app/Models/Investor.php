<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'country', 'phone'];

    public function states()
    {
       return $this->belongsToMany(State::class, 'employees', 'investor_id', 'state_id');
    }
}

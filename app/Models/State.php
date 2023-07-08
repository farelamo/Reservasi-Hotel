<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'facilities', 'price', 'room', 'bedroom'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function stateImages()
    {
        return $this->hasMany(StateImage::class);
    }
}

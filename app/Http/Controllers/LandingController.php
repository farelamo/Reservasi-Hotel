<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $data = User::latest()->get();
        return view('contoh', compact('data'));
    }
   
}

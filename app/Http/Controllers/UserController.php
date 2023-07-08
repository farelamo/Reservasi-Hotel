<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class UserController extends Controller
{
    public function index(){
        
    }

    public function cek_ketersediaan(Request $request){
        $states = State::when($request->nama_tempat, function($query, $nama_tempat){
                        return $query->where('name', 'like', "%{$nama_tempat}%");
                    })
                    ->when($request->start, function($query, $start){
                        return $query->where('price', '>=', $start);
                    })
                    ->when($request->end, function($query, $end){
                        return $query->where('price', '<=', $end);
                    })
                    ->paginate(3)->withQueryString();

        session()->flashInput($request->input());
        return view('user.cek_ketersediaan', compact('states'));
    }

    public function cek_detail($id){
        $state = State::where('id', $id)->first();
        return view('user.detail', compact('state'));
    }
}

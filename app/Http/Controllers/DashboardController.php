<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investor;
use App\Models\Employee;
use App\Models\State;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $employee       = Employee::count();
        $investor       = Investor::count();
        $state          = State::count();
        $receptionist   = User::where('role', 'receptionist')->count();

        return view('dashboard', compact('employee', 'investor', 'state', 'receptionist'));
    }
}

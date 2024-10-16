<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employee::count();
        $onLeaveEmployees = Employee::where('status', 'On Leave')->count();
        $archivedEmployees = Employee::where('status', 'Archived')->count();

        return view('dashboard', compact('totalEmployees', 'onLeaveEmployees', 'archivedEmployees'));
    }
}


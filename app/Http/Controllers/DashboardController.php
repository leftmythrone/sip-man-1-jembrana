<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/pages/dashboard/dashboard', [
            // Access portal website
            "gate" => "access",
            
            // Judul halaman
            "title" => "Dashboard",
        ]);
    }
}

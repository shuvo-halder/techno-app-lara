<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon;
use App\Models\User;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function blank(){
        return view('dashboard.blank');
    }
}

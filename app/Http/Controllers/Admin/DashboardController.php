<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Death;
use App\Born;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        $born_count = Born::all()->count();
        $death_count = Death::all()->count();
        //$total_entry = $born_count() + $death_count();
         
        return view('admin.dashboard',compact('born_count','death_count'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeTracker;

class DashboardController extends Controller
{
    public function __invoke(){
        // if (auth()->user()->subscribed()) {
        //     $entries = TimeTracker::all();
        //     return view('time-tracker', ['entries' => $entries]);
        // }else{
            return view('dashboard');
        // }
    }
}

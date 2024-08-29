<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeTracker;

class TimeTrackerController extends Controller
{
    // public function index()
    // {
    //     $entries = TimeTracker::all();
    //     return view('time-tracker', compact('entries'));
    // }

    public function start()
    {
        $entry = TimeTracker::create(['start_time' => now()]);
        return redirect()->back();
    }

    public function stop(TimeTracker $entry)
    {
        // dd($entry);
        $entry->update(['end_time' => now()]);
        return redirect()->back();
    }
}

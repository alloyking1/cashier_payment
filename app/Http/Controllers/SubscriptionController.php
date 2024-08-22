<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(Request $request){
        $checkout = $request->user()->checkout('pri_01j5tpz7m9hp1kmwerj1n0gy05')->returnTo(route('dashboard'));
        return view('subscribe', ['checkout' => $checkout]);
    }
}
<?php

namespace App\Http\Controllers;
use App\Plan;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
       //dd($plans);
        return view('frontend.membership', compact('plans'));
    }
    public function show(Plan $plan, Request $request)
    {
        //dd($plan);
        if($request->user()->subscribedToPlan($plan->stripe_plan, 'main')) {
            return redirect()->route('home')->with('success', 'You have already subscribed the plan');
        }
        return view('frontend.show', compact('plan'));
    }
}

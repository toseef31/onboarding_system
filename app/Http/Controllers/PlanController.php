<?php

namespace App\Http\Controllers;
use App\Plan;

use Illuminate\Http\Request;
use DB;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
       //dd($plans);
        return view('frontend.membership', compact('plans'));
    }

    public function updateplan()
    {
        $plans = Plan::all();
       //dd($plans);
        return view('frontend.update-pricing', compact('plans'));
    }
    public function show(Plan $plan, Request $request)
    {
        //dd($plan);
        if($request->user()->subscribedToPlan($plan->stripe_plan, 'main')) {
            return redirect()->route('dashboard')->with('success', 'You have already subscribed the plan');
        }
        return view('frontend.show', compact('plan'));
    }

public function usershow(Request $request)
    {

    $userplan=DB::table('users')
    ->join('subscriptions','subscriptions.user_user_id','=','users.user_id')
    ->join('plans','plans.stripe_plan','=','subscriptions.stripe_plan')
    ->where('users.user_id',$request->user()->user_id)->first();
   // dd($userplan);
    return view('frontend.dashboard.billing-info',compact('userplan'));
    }

}

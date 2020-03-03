<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use DB;

class SubscriptionController extends Controller
{
    public function create(Request $request, Plan $plan)
    {
        if($request->user()->subscribedToPlan($plan->stripe_plan, 'main')) {
            return redirect()->route('user-portal')->with('success', 'You have already subscribed the plan');
        }
        $plan = Plan::findOrFail($request->get('plan'));
        //dd($request->stripeToken);
        $request->user()
            ->newSubscription('main', $plan->stripe_plan)
            ->create($request->stripeToken);
        DB::table('numbers')->where('num_id',$request->user()->choice_number)->update(['status'=>'1']);
        return redirect('user-portal')->with('success', 'Your plan subscribed successfully');
    }
}

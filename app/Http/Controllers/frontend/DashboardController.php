<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Number;
use App\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
           
        $user=DB::table('users')->where('user_id',$request->user()->user_id)->first();
        $userdata=DB::table('users')->where('user_id',$request->user()->user_id)->where('users.stripe_id','=', null)->first();
        $userplan=DB::table('users')
        ->join('subscriptions','subscriptions.user_user_id','=','users.user_id')
        ->join('plans','plans.stripe_plan','=','subscriptions.stripe_plan')
        ->where('users.user_id',$request->user()->user_id)->where('users.stripe_id','!=', null)->first();
         
         //dd($userdata);
         if($userdata != null){
         $date = Carbon::parse($userdata->updated_at);
            $now = Carbon::now();

            $diff = $date->diffInDays($now);
            //dd($diff);
            if($diff > 1){
                $numbers = Number::where('num_id',$userdata->choice_number)->update(['status'=>'0']);
                $number =User::find($request->user()->user_id);
            
                $number->choice_number = '';
                $number->save();
            }
         }
         

         $unavailnumbers = Number::where('status','3')->get();
        
         foreach($unavailnumbers as $unavail){
             $undate = Carbon::parse($unavail->updated_at);
             $unnow = Carbon::now();
             $undiff = $undate->diffInDays($unnow);
             
             if($undiff > 90){
                 Number::where('num_id',$unavail->num_id)->update(['status'=>'0']);
                
            }
         }
        return view('frontend.dashboard.index',compact('user','userplan'));
    }

    public function updateNumber(Request $request)
    {
       // dd($request->input('number'));
        $number =User::find($request->user()->user_id);
          
          $number->choice_number = $request->input('number');
          $number->updated_at = Carbon::now();
          $number->save();
          //dd($number);
         $updatenumber= Number::where('num_id',$request->input('number'))->update(['status'=>'2']);
         // dd($updatenumber);
          return back()->with('success','User updated successfully');
    }

     public function stopNumber(Request $request,$id)
    {
       // dd($request->input('number'));
        $number =Number::find($id);
          
          $number->status = '3';
          $number->updated_at = Carbon::now();
          $number->save();
          $user =User::find($request->user()->user_id);
          
          $user->choice_number = '';
          $user->updated_at = Carbon::now();
          $user->save();
          //dd($number);
           try {
        //\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $user = User::find($request->user()->user_id);
        $user->subscription('main')->cancel();
          
          $user->stripe_id = null;
          $user->save();
          DB::table('subscriptions')->where('user_user_id',$request->user()->user_id)->delete();
          return back()->with('success','User updated successfully');
       
    } catch (\Exception $ex) {
        return $ex->getMessage();
    }
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

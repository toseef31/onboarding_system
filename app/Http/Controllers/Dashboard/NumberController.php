<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Number;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbers = Number::orderBy('num_id','desc')->paginate(10);
        $numbersbook = Number::where('status','1')->count();
        $numbersavailable = Number::where('status','0')->count();
        $numbersreserve = Number::where('status','2')->count();
        $numberunavail = Number::where('status','3')->count();
        return view('/admin.numbers',compact('numbers','numbersbook','numbersavailable','numbersreserve','numberunavail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin.create_number');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'number' => 'required',
        'status' => 'required'
    ]);

    $number = new Number();
    //On left field name in DB and on right field name in Form/view
    $number->number = $request->input('number');
    $number->status = $request->input('status');
    $number->save();
    $request->session()->flash('createnum', 'Number Create Successfully');
    return redirect('dashboard/numbers');
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
    public function edit(Request $request,$id)
    {

      if($request->isMethod('post')){

          $number =Number::find($id);
          
          $number->number = $request->input('number');
           $number->status = $request->input('status');
          $number->save();

          return back()->with('success','User updated successfully');
      }
       $number = Number::findOrFail($id);
       //dd($user);
       return view('admin.edit_number',compact('number'));
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
    public function destroy(Request $request,$id)
    {
         $number = Number::findOrFail($id);

        $number->delete();
       $request->session()->flash('delnum', 'Number delete Successfully');
        return redirect('/dashboard/numbers');
    }
}

<?php
namespace App\Classes;
use DB;
use Session;
use Carbon\Carbon;
use App\Number;
use App\User;
use Hash;

class Boarding {

  public function Numberget($id){
    //dd($numbers);
   
    $numbers = Number::where('num_id',$id)->where('status','!=','0')->first();
    //dd($numbers);
    return $numbers;
  }

  public function availableNumber(){
    //dd($numbers);
   
    $numbers = Number::where('status','=','0')->get();
    //dd($numbers);
    return $numbers;
  }
        
}

?>

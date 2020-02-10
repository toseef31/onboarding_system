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
    $numbers = Number::where('num_id',$id)->first();
    return $numbers;
  }
        
}

?>

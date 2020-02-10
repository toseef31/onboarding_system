<?php
namespace App\Facade; //created 'facade' folder in app directory
use Illuminate\Support\Facades\Facade;

class Boarding extends Facade{
    protected static function getFacadeAccessor() { 
        return 'Boarding'; //'TestFacades' alias name for the façade class declare in the class 'NewFacadeServiceProvider'
    } 
}
?>
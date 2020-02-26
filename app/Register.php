<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $fillable = ['first_name', 'surname', 'company_name', 'no_of_employees', 'business_nature', 'email', 'password', 'phone','created_at','updated_at'];
}

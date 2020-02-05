<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $fillable = ['first_name', 'surname', 'company_name', 'email', 'password', 'phone','created_at','updated_at'];
}

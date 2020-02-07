<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $table = 'numbers';
    protected $primaryKey = 'num_id';
     protected $fillable = [
        'number',
        'status'
    ];
}

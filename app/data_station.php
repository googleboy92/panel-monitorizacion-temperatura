<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_station extends Model
{
    //
    //protected $table = 'data_station';
    protected $fillable =['humidity','temperature'];
    
}

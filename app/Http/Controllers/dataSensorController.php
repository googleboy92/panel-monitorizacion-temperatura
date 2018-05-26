<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dataSensor;


class dataSensorController extends Controller
{
    //

    public function store ($humidity, $temperature){
        
        $data = new dataSensor;
        
        $data->humidity = $humidity;
        $data->temperature= $temperature;
                
        $data->save();
   }
}

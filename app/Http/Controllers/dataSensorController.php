<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_station;


class dataSensorController extends Controller
{
    //

    public function store ($humidity, $temperature){

        $data = new data_station;
        
        $data->humedity = $humidity;
        $data->temperature= $temperature;
                
        $data->save();
   }
}

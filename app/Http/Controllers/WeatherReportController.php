<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherReportRequest;
use Illuminate\Http\Request;

class WeatherReportController extends Controller
{
    public function getWeatherData(WeatherReportRequest $request){
        return json_encode(1);
    }
}

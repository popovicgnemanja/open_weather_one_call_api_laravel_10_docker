<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherReportRequest;
use App\Services\WeatherReportServiceInterface;
use Illuminate\Http\Request;

class WeatherReportController extends Controller
{
    public function __construct(private readonly WeatherReportServiceInterface $weatherReportService)
    {
    }

    public function getWeatherData(WeatherReportRequest $request){
        return $this->weatherReportService->fetchData($request->lat,$request->long);
    }
}

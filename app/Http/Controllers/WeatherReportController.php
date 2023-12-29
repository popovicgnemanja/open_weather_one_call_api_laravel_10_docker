<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherReportRequest;
use App\Services\WeatherReportServiceInterface;
use Exception;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class WeatherReportController extends Controller
{
    public function __construct(private readonly WeatherReportServiceInterface $weatherReportService)
    {
    }

    public function getWeatherData(WeatherReportRequest $request){
        try {
            return $this->weatherReportService->fetchData($request->lat,$request->long);
        } catch (Exception $exception){
            Log::error($exception->getMessage(), [$exception->getTraceAsString()]);
            return response()->json('Something gets wrong.', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

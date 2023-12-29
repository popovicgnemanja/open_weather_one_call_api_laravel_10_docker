<?php

namespace App\Services;

use App\Http\Resources\WeatherResource;
use Exception;
use Illuminate\Support\Facades\Http;

class OpenServiceWeatherMapService implements WeatherReportServiceInterface
{
    public function __construct(private readonly string $apiKey)
    {
    }

    /**
     * @throws Exception
     */
    public function fetchData($latitude, $longitude): WeatherResource
    {
        try {
            $response = Http::get("https://api.openweathermap.org/data/3.0/onecall", [
                'lat' => $latitude,
                'lon' => $longitude,
                'exclude' => 'minutely,hourly',
                'appid' => $this->apiKey,
            ]);

            return new WeatherResource($response->json());
        } catch (Exception $exception){
            throw new Exception($exception->getMessage(), $exception->getCode());
        }

    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lat' => $this->resource['lat'],
            'lon' => $this->resource['lon'],
            'timezone' => $this->resource['timezone'],
            'current_weather' => [
                'dt' => $this->resource['current']['dt'],
                'temp' => $this->resource['current']['temp'],
                'feels_like' => $this->resource['current']['feels_like'],
            ],
            'daily_forecast' => DailyForecastResource::collection($this->resource['daily']),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DailyForecastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'dt' => $this['dt'],
            'sunrise' => $this['sunrise'],
            'sunset' => $this['sunset'],
            'summary' => $this['summary'],
            'temp' => $this['temp'],
        ];
    }
}

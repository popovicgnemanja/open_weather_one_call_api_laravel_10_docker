<?php

namespace App\Services;

interface WeatherReportServiceInterface
{
    public function fetchData($latitude, $longitude);
}

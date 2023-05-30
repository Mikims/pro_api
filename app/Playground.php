<?php

namespace App;

use App\Services\Geolocation\Geolocation;
use App\Services\Geolocation\GeolocationFacade;

class Playground
{
    public function __construct(Geolocation $geolocation)
    {
        $result = GeolocationFacade::find();  // resolving a service instance using facade
        // $result = $geolocation->find();  // resolving a service instance using dependency injection
        dump($result);
        // $geolocation = app(Geolocation::class);
    }
}
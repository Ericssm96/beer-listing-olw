<?php

namespace App\Http\Controllers;

use App\Services\PunkAPIService;
use App\Http\Requests\{BeerRequest};

class BeerController extends Controller
{
    public function index(BeerRequest $request, PunkAPIService $service)
    {
        $params = $request->all();
        return $service->getBeers(...$params);
    }
}

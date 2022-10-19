<?php

namespace App\Http\Controllers;

use App\Services\PunkAPIService;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function index(Request $request)
    {
        $service = new PunkAPIService();
        return $service->getBeers();
    }
}

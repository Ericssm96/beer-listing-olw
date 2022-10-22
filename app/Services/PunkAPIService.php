<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PunkAPIService
{
    public function getBeers()
    {
        return Http::punkapi()->get('/beers')->throw();
    }
}

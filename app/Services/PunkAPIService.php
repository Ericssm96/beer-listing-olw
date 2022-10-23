<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PunkAPIService
{
    public function getBeers(
        ?string $beer_name = null,
        ?string $food = null,
        ?string $malt = null,
        ?int $ibu_gt = null
    )
    {
        $params = array_filter(get_defined_vars());
        return Http::punkapi()
            ->get('/beers', $params)
            ->throw() // Esse método vai ser responsável por fazer com que uma exceção seja lançada caso algo dê errado
            ->json();
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\PunkAPIService;
use App\Http\Requests\{BeerRequest};

class BeerController extends Controller
{
    public function index(BeerRequest $request, PunkAPIService $service)
    {
        // $params = $request->all(); se usarmos o método "all()", vamos encontrar erros caso as urls possuam query params para os quais não estamos preparados, portanto é melhor usar o método "validated()", pois assim passamos apenas os valores que foram validados para o nosso objeto de request personalizado (BeerRequest);
        $params = $request->validated();
        return $service->getBeers(...$params);
    }
}

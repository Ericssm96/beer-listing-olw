<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Http::macro('punkapi', function() {
            return Http::withHeaders([
                'accept' => 'application/json',
            ])-> baseUrl(config('punkapi.url'))
                ->retry(2, 1000);
        });
        /* Http::macro('punkapi', function(){
            return Http::acceptJson()->baseUrl(config('punkapi.url'))->retry(2, 1000); código alternativo
        }); */
    }
}

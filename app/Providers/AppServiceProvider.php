<?php

namespace App\Providers;

use Braintree\Gateway;
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
        $this->app->singleton(Gateway::class, function ($app) {
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'wdr336wck5hkdstr',
                    'publicKey' => 's7pq86gcq8xq565j',
                    'privateKey' => 'dbf06c4e472a77eaac74ba55edf1d23b'
                ]
            );
        });
    }
}
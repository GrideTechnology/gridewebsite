<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class PayPalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('services.paypal.client_id'),
                config('services.paypal.client_secret')
            )
        );

        // Set PayPal SDK mode (sandbox or live)
        $apiContext->setConfig([
            'mode' => config('services.paypal.mode'), // 'sandbox' or 'live'
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

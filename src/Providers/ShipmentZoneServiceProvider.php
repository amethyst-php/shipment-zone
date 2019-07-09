<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class ShipmentZoneServiceProvider extends CommonServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Amethyst\Providers\CourierServiceProvider::class);
    }
}

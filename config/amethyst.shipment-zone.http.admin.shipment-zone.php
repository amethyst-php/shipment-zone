<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\ShipmentZonesController::class,
    'router'     => [
        'as'     => 'shipment-zone.',
        'prefix' => '/shipment-zones',
    ],
];

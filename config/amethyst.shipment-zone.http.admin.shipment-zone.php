<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ShipmentZonesController::class,
    'router'     => [
        'as'     => 'shipment-zone.',
        'prefix' => '/shipment-zones',
    ],
];

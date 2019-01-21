<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ShipmentZoneAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'shipment-zone.create',
        Tokens::PERMISSION_UPDATE => 'shipment-zone.update',
        Tokens::PERMISSION_SHOW   => 'shipment-zone.show',
        Tokens::PERMISSION_REMOVE => 'shipment-zone.remove',
    ];
}

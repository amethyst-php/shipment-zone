<?php

return [
    'table'      => 'amethyst_shipment_zones',
    'comment'    => 'ShipmentZone',
    'model'      => Railken\Amethyst\Models\ShipmentZone::class,
    'schema'     => Railken\Amethyst\Schemas\ShipmentZoneSchema::class,
    'repository' => Railken\Amethyst\Repositories\ShipmentZoneRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ShipmentZoneSerializer::class,
    'validator'  => Railken\Amethyst\Validators\ShipmentZoneValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ShipmentZoneAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ShipmentZoneFaker::class,
    'manager'    => Railken\Amethyst\Managers\ShipmentZoneManager::class,
];

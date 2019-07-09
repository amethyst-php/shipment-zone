<?php

return [
    'table'      => 'amethyst_shipment_zones',
    'comment'    => 'ShipmentZone',
    'model'      => Amethyst\Models\ShipmentZone::class,
    'schema'     => Amethyst\Schemas\ShipmentZoneSchema::class,
    'repository' => Amethyst\Repositories\ShipmentZoneRepository::class,
    'serializer' => Amethyst\Serializers\ShipmentZoneSerializer::class,
    'validator'  => Amethyst\Validators\ShipmentZoneValidator::class,
    'authorizer' => Amethyst\Authorizers\ShipmentZoneAuthorizer::class,
    'faker'      => Amethyst\Fakers\ShipmentZoneFaker::class,
    'manager'    => Amethyst\Managers\ShipmentZoneManager::class,
];

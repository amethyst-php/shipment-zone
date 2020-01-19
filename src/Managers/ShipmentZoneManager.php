<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\ShipmentZone                 newEntity()
 * @method \Amethyst\Schemas\ShipmentZoneSchema          getSchema()
 * @method \Amethyst\Repositories\ShipmentZoneRepository getRepository()
 * @method \Amethyst\Serializers\ShipmentZoneSerializer  getSerializer()
 * @method \Amethyst\Validators\ShipmentZoneValidator    getValidator()
 * @method \Amethyst\Authorizers\ShipmentZoneAuthorizer  getAuthorizer()
 */
class ShipmentZoneManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.shipment-zone.data.shipment-zone';
}

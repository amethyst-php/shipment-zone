<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ShipmentZoneFaker;
use Amethyst\Managers\ShipmentZoneManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ShipmentZoneTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ShipmentZoneManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ShipmentZoneFaker::class;
}

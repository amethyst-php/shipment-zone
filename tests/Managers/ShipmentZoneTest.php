<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ShipmentZoneFaker;
use Railken\Amethyst\Managers\ShipmentZoneManager;
use Railken\Amethyst\Tests\BaseTest;
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

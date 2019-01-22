<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class ShipmentZoneFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('courier', CourierFaker::make()->parameters()->toArray());
        $bag->set('zip_code', $faker->postcode);
        $bag->set('city', $faker->city);
        $bag->set('province', $faker->name);
        $bag->set('country', 'IT');
        $bag->set('region', $faker->name);

        return $bag;
    }
}

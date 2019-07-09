<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\CourierManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class ShipmentZoneSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('courier_id')
                ->setRelationName('courier')
                ->setRelationManager(CourierManager::class)
                ->setRequired(true),
            Attributes\TextAttribute::make('zip_code')
                ->setRequired(true),
            Attributes\TextAttribute::make('city')
                ->setRequired(true),
            Attributes\TextAttribute::make('province')
                ->setRequired(true),
            Attributes\TextAttribute::make('region')
                ->setRequired(true),
            Attributes\TextAttribute::make('country')
                ->setRequired(true),
            Attributes\NumberAttribute::make('price_in'),
            Attributes\NumberAttribute::make('price_out'),
            Attributes\TextAttribute::make('shipment_label'),
            Attributes\NumberAttribute::make('transit_time'),
            Attributes\BooleanAttribute::make('shipment_day_1'),
            Attributes\BooleanAttribute::make('shipment_day_2'),
            Attributes\BooleanAttribute::make('shipment_day_3'),
            Attributes\BooleanAttribute::make('shipment_day_4'),
            Attributes\BooleanAttribute::make('shipment_day_5'),
            Attributes\BooleanAttribute::make('shipment_day_6'),
            Attributes\BooleanAttribute::make('shipment_day_7'),
            Attributes\BooleanAttribute::make('delivery_day_1'),
            Attributes\BooleanAttribute::make('delivery_day_2'),
            Attributes\BooleanAttribute::make('delivery_day_3'),
            Attributes\BooleanAttribute::make('delivery_day_4'),
            Attributes\BooleanAttribute::make('delivery_day_5'),
            Attributes\BooleanAttribute::make('delivery_day_6'),
            Attributes\BooleanAttribute::make('delivery_day_7'),
            Attributes\BooleanAttribute::make('enabled'),
            Attributes\TextAttribute::make('code'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}

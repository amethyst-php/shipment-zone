<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateShipmentZonesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.shipment-zone.data.shipment-zone.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('zip_code');
            $table->string('city');
            $table->string('province');
            $table->string('region');
            $table->string('country');
            $table->integer('courier_id')->unsigned()->nullable();
            $table->foreign('courier_id')->references('id')->on(Config::get('amethyst.courier.data.courier.table'));
            $table->float('price_in')->default(0);
            $table->float('price_out')->default(0);
            $table->text('shipment_label')->nullable();
            $table->integer('transit_time')->nullable()->default(24);
            $table->boolean('shipment_day_1')->default(0);
            $table->boolean('shipment_day_2')->default(0);
            $table->boolean('shipment_day_3')->default(0);
            $table->boolean('shipment_day_4')->default(0);
            $table->boolean('shipment_day_5')->default(0);
            $table->boolean('shipment_day_6')->default(0);
            $table->boolean('shipment_day_7')->default(0);
            $table->boolean('delivery_day_1')->default(0);
            $table->boolean('delivery_day_2')->default(0);
            $table->boolean('delivery_day_3')->default(0);
            $table->boolean('delivery_day_4')->default(0);
            $table->boolean('delivery_day_5')->default(0);
            $table->boolean('delivery_day_6')->default(0);
            $table->boolean('delivery_day_7')->default(0);
            $table->boolean('enabled')->default(1);
            $table->string('code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.shipment-zone.data.shipment-zone.table'));
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_house_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('property_id');
            $table->string('openHouseKey')->nullable(true);
            $table->string('nwmDeleted')->nullable(true);
            $table->date('openHouseDate')->nullable(true);
            $table->dateTime('openHouseStartTime')->nullable(true);
            $table->dateTime('openHouseEndTime')->nullable(true);
            $table->string('nwmTypeId')->nullable(true);
            $table->string('modificationTimestamp')->nullable(true);
            $table->string('originatingSystemName')->nullable(true);
            $table->string('listingKey')->nullable(true);
            $table->string('listingId')->nullable(true);
            $table->string('mlgCanView')->nullable(true);
            $table->text('mlgCanUse')->nullable(true);
            $table->string('refreshments')->nullable(true);
            $table->string('openHouseRemarks')->nullable(true);
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('open_house_properties');
    }
};

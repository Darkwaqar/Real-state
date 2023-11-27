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
        Schema::create('mlsproperties', function (Blueprint $table) {
            $table->id();
            $table->string('ListingKeyNumeric')->nullable(true);
            $table->string('ListingKey')->nullable(true);
            $table->string('ListingId')->nullable(true);
            $table->string('CityName')->nullable(true);
            $table->string('ListAgentFullName')->nullable(true);
            $table->string('ListAgentKeyNumeric')->nullable(true);
            $table->string('ListAgentKey')->nullable(true);
            $table->string('ListAgentMlsId')->nullable(true);
            $table->string('ListOfficeKeyNumeric')->nullable(true);
            $table->string('ListOfficeKey')->nullable(true);
            $table->string('ListOfficeMlsId')->nullable(true);
            $table->string('ListOfficeName')->nullable(true);
            $table->string('ListOfficePhone')->nullable(true);
            $table->string('ListingContractDate')->nullable(true);
            $table->string('StateOrProvince')->nullable(true);
            $table->string('OriginatingSystemModificationTimestamp')->nullable(true);
            $table->string('PropertyName')->nullable(true);
            $table->string('PostalCode')->nullable(true);
            $table->string('PropetyOriginalPrice')->nullable(true);
            $table->unsignedBigInteger('PropetySellPrice')->nullable(true);
            $table->string('Bedrooms')->nullable(true);
            $table->string('BathroomsFull')->nullable(true);
            $table->string('BathroomsHalf')->nullable(true);
            $table->string('PropertyAddress')->nullable(true);
            $table->string('PropertyArea')->nullable(true);
            $table->string('SubdivisionName')->nullable(true);
            $table->string('PropertyAreaUnits')->nullable(true);
            $table->string('PropertyLatitude')->nullable(true);
            $table->string('PropertyLongitude')->nullable(true);
            $table->string('PublishStatus')->nullable(true);
            $table->text('PropertyDirections')->nullable(true);
            $table->tinyInteger('IsMlsProperty')->default(0);
            $table->tinyInteger('PropertyStatus')->default(1)->comment('1=active, 0=expire, 2:pending');
            $table->text('PropertyDescription')->nullable(true);
            $table->string('slug')->nullable(true);
            $table->unsignedBigInteger('batch_id')->nullable(true);
            $table->unsignedBigInteger('loop_id')->nullable(true);
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->unsignedBigInteger('admin_id')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};

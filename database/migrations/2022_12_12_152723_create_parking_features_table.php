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
        Schema::create('mlsparking_features', function (Blueprint $table) {
            $table->id();
            $table->string('ParkingFeatureName');
            $table->string('ParkingFeatureIcon')->nullable(true);
            $table->string('ParkingFeatureSelectedIcon')->nullable(true);
            $table->tinyInteger('Status')->default(1);
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
        Schema::dropIfExists('parking_features');
    }
};

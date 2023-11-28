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
        Schema::create('property_water_sources', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mlsproperties_id')->constrained()->onDelete('cascade');
            $table->foreignId('mlswater_sources_id')->constrained()->onDelete('cascade');

            //$table->foreign('mlsproperty_id')->references('id')->on('mlsproperties')->onDelete('cascade');
            //$table->foreign('mlswater_sources_id')->references('id')->on('mlswater_sources')->onDelete('cascade');
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
        Schema::dropIfExists('property_water_sources');
    }
};

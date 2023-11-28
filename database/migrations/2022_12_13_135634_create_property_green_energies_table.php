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
        Schema::create('property_green_energies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mlsproperties_id')->constrained()->onDelete('cascade');
            $table->foreignId('mlsgreen_energy_efficients_id')->constrained()->onDelete('cascade');
            
            //$table->foreign('mlsproperty_id')->references('id')->on('mlsproperties')->onDelete('cascade');
            //$table->foreign('mlsgreen_energy_efficients_id')->references('id')->on('mlsgreen_energy_efficients')->onDelete('cascade');
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
        Schema::dropIfExists('property_green_energies');
    }
};

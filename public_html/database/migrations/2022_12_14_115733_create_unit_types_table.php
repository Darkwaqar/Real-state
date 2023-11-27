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
        Schema::create('unit_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mlsproperties_id')->constrained()->onDelete('cascade');
            $table->string('UnitTypeKey');
            $table->string('UnitName');
            $table->string('UnitTypeBathsTotal');
            $table->string('UnitTypeBedsTotal');
            $table->string('UnitDishwasher');
            $table->string('UnitFireplaces');
            $table->string('UnitRangeOven');
            $table->string('UnitRefrigerator');
            $table->string('UnitTypeActualRent');
            $table->string('UnitSquareFeet');
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
        Schema::dropIfExists('unit_types');
    }
};

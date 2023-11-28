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
        Schema::create('propertyutilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mlsproperties_id')->constrained()->onDelete('cascade');
            $table->foreignId('mlsutilities_id')->constrained()->onDelete('cascade');
            //$table->foreign('mlsproperty_id')->references('id')->on('mlsproperties')->onDelete('cascade');
            //$table->foreign('mlsutilities_id')->references('id')->on('mlsutilities')->onDelete('cascade');
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
        Schema::dropIfExists('propertyutilities');
    }
};

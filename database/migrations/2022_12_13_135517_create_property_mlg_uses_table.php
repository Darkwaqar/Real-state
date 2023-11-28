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
        Schema::create('property_mlg_uses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mlsproperties_id')->constrained()->onDelete('cascade');
            $table->foreignId('mlsmlg_can_uses_id')->constrained()->onDelete('cascade');

            //$table->foreign('mlsproperty_id')->references('id')->on('mlsproperties')->onDelete('cascade');
            //$table->foreign('mlsmlg_can_uses_id')->references('id')->on('mlsmlg_can_uses')->onDelete('cascade');
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
        Schema::dropIfExists('property_mlg_uses');
    }
};

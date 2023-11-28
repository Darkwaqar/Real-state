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
        Schema::create('mlsbasements', function (Blueprint $table) {
            $table->id();
            $table->string('BasementName');
            $table->tinyInteger('Status')->default(1);
            $table->string('BasementIcon')->nullable(true);
            $table->string('BasementSelectedIcon')->nullable(true);
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
        Schema::dropIfExists('basements');
    }
};

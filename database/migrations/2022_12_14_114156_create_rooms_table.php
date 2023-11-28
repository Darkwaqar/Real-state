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
        Schema::create('mlsrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mlsproperties_id')->constrained()->onDelete('cascade');
            $table->string('RoomKey');
            $table->string('RoomLevel');
            $table->string('RoomType');
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
        Schema::dropIfExists('rooms');
    }
};

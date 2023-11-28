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
        Schema::create('mlsfireplace_features', function (Blueprint $table) {
            $table->id();
            $table->string('FirePlaceName');
            $table->string('FirePlaceIcon')->nullable(true);
            $table->string('FirePlaceSelectedIcon')->nullable(true);
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
        Schema::dropIfExists('fireplace_features');
    }
};

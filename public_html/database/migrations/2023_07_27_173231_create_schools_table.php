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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->string('universal-id');
            $table->string('nces-id')->nullable(true);
            $table->string('state-id')->nullable(true);
            $table->string('name')->nullable(true);
            $table->longText('school-summary')->nullable(true);
            $table->string('type')->nullable(true);
            $table->string('level_codes')->nullable(true);
            $table->string('level')->nullable(true);
            $table->string('street')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('state')->nullable(true);
            $table->string('fipscounty')->nullable(true);
            $table->string('zip')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('fax')->nullable(true);
            $table->string('county')->nullable(true);
            $table->string('lat')->nullable(true);
            $table->string('lon')->nullable(true);
            $table->string('district-name')->nullable(true);
            $table->unsignedBigInteger('district-id')->nullable(true);
            $table->string('website')->nullable(true);
            $table->string('overview-url')->nullable(true);
            $table->string('rating')->nullable(true);
            $table->string('year')->nullable(true);
            $table->longText('rating-description')->nullable(true);
            $table->double('distance', 30 , 30)->nullable(true);
            $table->dateTime('deleted_at')->nullable(true);
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
        Schema::dropIfExists('schools');
    }
};

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
        Schema::create('nwmls_batch_insert', function (Blueprint $table) {
            $table->id();
            $table->text('currentLink');
            $table->string('type');
            $table->string('statusMessage')->nullable(true);
            $table->string('random')->comment('We are doing this because according to my mind we are going to use this with history table to verify the results.')->nullable(true);
            $table->text('nextLink')->nullable(true);
            $table->longText('urlData')->nullable(true);
            $table->double('sizeOfurlData')->nullable(true);
            $table->double('propertyAdded')->nullable(true);
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nwmls_batch_insert');
    }
};

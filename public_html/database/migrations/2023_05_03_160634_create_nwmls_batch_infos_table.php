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
        Schema::create('nwmls_batch_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('batch_insert_id')->nullable(true);
            $table->longText('urlData')->nullable(true);
            $table->double('sizeOfurlData')->nullable(true);
            $table->double('mls_standard_id')->comment('primary id from mls_standard')->nullable(true);
            $table->double('propertyAdded')->nullable(true);
            $table->date('lastInsertedDate');
            $table->string('mls_standard_random_id')->comment('random id from mls_standard id to store the infor/details of links')->nullable(true);
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
        Schema::dropIfExists('nwmls_batch_infos');
    }
};

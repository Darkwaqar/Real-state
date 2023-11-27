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
        Schema::create('schedule_a_tour', function (Blueprint $table) {
            $table->id('id');
            $table->date('date')->nullable(true);
            $table->time('time')->nullable(true);
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('buyer_id')->nullable(true);
            $table->unsignedBigInteger('admin_id')->nullable(true);
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
        Schema::dropIfExists('schedule_a_tour');
    }
};

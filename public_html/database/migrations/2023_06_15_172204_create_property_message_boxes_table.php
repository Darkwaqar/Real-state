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
        Schema::create('property_message_boxes', function (Blueprint $table) {
            $table->id();
            $table->text('message')->nullable(true);
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('seller_id')->nullable(true);
            $table->unsignedBigInteger('buyer_id')->nullable(true);
            $table->unsignedBigInteger('admin_id')->nullable(true);
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
        Schema::dropIfExists('property_message_boxes');
    }
};

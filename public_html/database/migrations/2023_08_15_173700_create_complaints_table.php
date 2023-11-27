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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->text('subject')->nullable(true);
            $table->string('ticket_no');
            $table->string('type')->nullable(true);
            $table->longText('description')->nullable(true);
            $table->unsignedBigInteger('user_id');
            $table->string('attachment')->nullable(true);
            $table->string('attachment2')->nullable(true);
            $table->string('attachment3')->nullable(true);
            $table->string('attachment4')->nullable(true);
            $table->string('status')->nullable(true);
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
        Schema::dropIfExists('complaints');
    }
};

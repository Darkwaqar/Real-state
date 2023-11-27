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
        Schema::create('mls_standard_status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('value');
            $table->string('StandardName');
            $table->string('random');
            $table->double('status');
            $table->dateTime('lastInsertedDate');
            $table->text('firstUrl');
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
        Schema::dropIfExists('mls_standard_status');
    }
};

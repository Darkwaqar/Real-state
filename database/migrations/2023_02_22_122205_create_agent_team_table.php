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
        Schema::create('agent_team', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable(true);
            $table->string('dp')->nullable(true);
            $table->string('designation')->nullable(true);
            $table->unsignedBigInteger('agent_id');
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
        Schema::dropIfExists('agent_team');
    }
};

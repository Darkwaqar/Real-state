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
        Schema::table('mlsproperties', function (Blueprint $table) {
            $table->string('bought_with_agent')->nullable(true);
            $table->string('bought_with_agent_office')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mlsproperties', function (Blueprint $table) {
            //
        });
    }
};

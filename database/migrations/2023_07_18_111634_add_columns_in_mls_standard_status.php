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
        Schema::table('mls_standard_status', function (Blueprint $table) {
            $table->dateTime('last_record_inserted_time')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mls_standard_status', function (Blueprint $table) {
            $table->dateTime('last_record_inserted_time')->nullable(true);
        });
    }
};

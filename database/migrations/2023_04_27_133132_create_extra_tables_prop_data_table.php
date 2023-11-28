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
        Schema::create('extra_tables_prop_data', function (Blueprint $table) {
            $table->id();
            $table->string('tableName');
            $table->string('name');
            $table->string('icon')->nullable(true);
            $table->string('icon2')->nullable(true);
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
        Schema::dropIfExists('extra_tables_prop_data');
    }
};

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
        Schema::create('mlsfoundation_details', function (Blueprint $table) {
            $table->id();
            $table->string('FoundationDetailsName');
            $table->string('FoundationDetailsIcon')->nullable(true);
            $table->string('FoundationDetailsSelectedIcon')->nullable(true);
            $table->tinyInteger('Status')->default(1);
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
        Schema::dropIfExists('foundation_details');
    }
};

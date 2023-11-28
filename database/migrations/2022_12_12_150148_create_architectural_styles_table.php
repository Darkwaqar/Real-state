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
        Schema::create('mlsarchitectural_styles', function (Blueprint $table) {
             $table->id();
            $table->string('ArchitecturalName');
            $table->string('ArchitecturalIcon')->nullable(true);;
            $table->string('ArchitecturalSelectedIcon')->nullable(true);;
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
        Schema::dropIfExists('architectural_styles');
    }
};

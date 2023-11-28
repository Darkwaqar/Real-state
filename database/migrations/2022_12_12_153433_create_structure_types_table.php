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
        Schema::create('mlsstructure_types', function (Blueprint $table) {
            $table->id();
            $table->string('StructureTypeName');
            $table->string('structure_icon')->nullable(true);
            $table->string('structure_selected_icon')->nullable(true);
            $table->tinyInteger('Status')->nullable(TRUE); //->default(1);
            $table->integer('order')->nullable(TRUE);
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
        Schema::dropIfExists('structure_types');
    }
};

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
        Schema::create('mls_interior_features', function (Blueprint $table) {
            $table->id();
            $table->string('InteriorFeatureName');
            $table->string('InteriorFeatureIcon')->nullable(true);
            $table->string('InteriorFeatureSelectedIcon')->nullable(true);
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
        Schema::dropIfExists('mls_interior_features');
    }
};

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
        Schema::create('school_subratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->string('universal_id');
            $table->longText('test-scores-rating')->nullable(true);
            $table->longText('college-readiness-rating')->nullable(true);
            $table->longText('equity-rating')->nullable(true);
            $table->longText('academic-progress-rating')->nullable(true);
            $table->longText('student-growth-rating')->nullable(true);
            $table->longText('attendance-flag')->nullable(true);
            $table->longText('discipline-flag')->nullable(true);
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
        Schema::dropIfExists('school_subratings');
    }
};

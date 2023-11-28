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
        Schema::create('complaint_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('complaints_id');
            $table->unsignedBigInteger('status_changed_by')->nullable(true);
            $table->string('status')->nullable(true);
            $table->string('status_changed_description')->nullable(true);
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
        Schema::dropIfExists('complaint_statuses');
    }
};

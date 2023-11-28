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
        Schema::create('user_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('active_license_status')->nullable();
            $table->string('license_number')->nullable();
            $table->string('deals_completed')->nullable();
            $table->string('license_suspension_ten_years_status')->nullable();
            $table->string('real_estate_assoc_disciplined_status')->nullable();
            $table->string('license_under_investigation_status')->nullable();
            $table->string('license_restriction_status')->nullable();
            $table->string('license_unrestricted_status')->nullable();
            $table->string('deals_exclude_lease_completed')->nullable();
            $table->string('real_estate_assoc_name')->nullable();
            $table->dateTime('deleted_at')->nullable(true);
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
        Schema::dropIfExists('user_questions');
    }
};

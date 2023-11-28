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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('email')->unique()->nullable(true);
            $table->string('user_name')->nullable(true);
            $table->string('first_name')->nullable(true);;
            $table->string('last_name')->nullable(true);;
            $table->string('mobile_number')->nullable(true);
            $table->string('address')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('state')->nullable(true);
            $table->string('veteran_status')->nullable(true);
            $table->string('ethnicity')->nullable(true);
            $table->string('postal_code')->nullable(true);
            $table->string('hear_about_us')->nullable(true);
            $table->unsignedBigInteger('role_id');
            $table->string('web_link')->nullable(true);
            $table->string('linkedin_link')->nullable(true);
            $table->string('gender')->nullable(true);
            $table->string('status')->nullable(true);
            $table->string('is_featured')->nullable(true);
            $table->string('is_buyer')->nullable(true);
            $table->string('is_seller')->nullable(true);
            $table->string('slug')->nullable(true);
            $table->string('user_dp')->nullable(true);
            $table->unsignedBigInteger('admin_id')->nullable(true);
            $table->string('type')->nullable(true);
            $table->string('identity')->nullable(true);
            $table->text('about')->nullable(true);
            $table->dateTime('deleted_at')->nullable(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(true);
            $table->string('agent_pasword')->nullable(true);
            $table->string('email_link')->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

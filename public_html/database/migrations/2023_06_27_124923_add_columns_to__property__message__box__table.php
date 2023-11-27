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
        Schema::table('property_message_boxes', function (Blueprint $table) {
                $table->string('agent_id')->nullable(true);
                $table->string('agent_email_id')->nullable(true);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_message_boxes', function (Blueprint $table) {
            //
        });
    }
};

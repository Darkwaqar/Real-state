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
        Schema::table('property_leads', function (Blueprint $table) {
            $table->unsignedBigInteger('lead_value_id')->after('lead_type')->nullable();
           // $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_leads', function (Blueprint $table) {
            // $table->dropColumn('lead_value_id', 'deleted_at');
        });
    }
};

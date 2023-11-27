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
        Schema::create('house_canary_property_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->longText('property_block_crime')->nullable(true);
            $table->longText('property_details')->nullable(true);
            $table->longText('property_fema_disaster_area')->nullable(true);
            $table->longText('property_flood')->nullable(true);
            $table->longText('property_geo_features')->nullable(true);
            $table->longText('property_rental_value')->nullable(true);
            $table->longText('property_sales_history')->nullable(true);
            $table->longText('property_school')->nullable(true);
            $table->longText('property_tax_history')->nullable(true);
            $table->longText('property_value')->nullable(true);
            $table->longText('property_address_info')->nullable(true);
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
        Schema::dropIfExists('house_canary_property_data');
    }
};

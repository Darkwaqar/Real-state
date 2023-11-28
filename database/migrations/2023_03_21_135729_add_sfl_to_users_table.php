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
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable(true);
            $table->string('facebook_id')->nullable(true);
            $table->string('company_dp')->nullable(true);
            $table->string('company_nmls_id')->nullable(true);
            $table->string('user_nmls_id')->nullable(true);
            $table->string('company_name')->nullable(true);
            $table->text('business_structure')->nullable(true);
            $table->text('address2')->nullable(true);
            $table->string('date_formed')->nullable(true);
            $table->string('fiscal_year_end')->nullable(true);
            $table->string('formed_in')->nullable(true);
            $table->string('primary_fedral_regulator')->nullable(true);
            $table->string('registration_status')->nullable(true);
            $table->string('stock_symbol')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

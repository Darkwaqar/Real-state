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
        Schema::create('lending_and_loan_officer_lead', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->text('address');
            $table->string('country')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('zipCode')->nullable(true);
            $table->string('loanTenure');
            $table->string('loanType');
            $table->string('creditScore');
            $table->string('propertyType');
            $table->string('propertyUsage');
            $table->string('points');
            $table->bigInteger('loanBalance');
            $table->bigInteger('homeValue');
            $table->string('downPayment');
            $table->string('vaLoans');
            $table->string('fhaLoans');
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->unsignedBigInteger('lenderLoanId')->nullable(true);
            $table->dateTime('deleted_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lending_and_loan_officer_lead');
    }
};

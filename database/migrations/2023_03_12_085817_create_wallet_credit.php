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
        Schema::create('wallet_credit', function (Blueprint $table) {
            $table->id();
            $table->string('card_holder_name')->nullable();
            $table->unsignedBigInteger('agent_id');
            //$table->foreign('agent_id')->references('id')->on('users');
            $table->text('transaction_id')->nullable();
            $table->decimal('amount', $precision = 24, $scale = 2);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('wallet_credit');
    }
};

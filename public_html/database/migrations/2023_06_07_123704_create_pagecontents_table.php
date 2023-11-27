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
        Schema::create('pagecontents', function (Blueprint $table) {
            $table->id();

            $table->text('type')->nullable(true);
            $table->longText('content')->nullable(true);
            $table->string('page_id')->nullable(true);
            $table->Text('comment')->nullable(true);
            // $table->string('title_1')->nullable(true);
            // $table->string('description_1')->nullable(true);
            // $table->longText('content_1')->nullable(true);
            // $table->string('title_2')->nullable(true);
            // $table->string('description_2')->nullable(true);
            // $table->longText('content_2')->nullable(true);
            // $table->string('title_3')->nullable(true);
            // $table->string('description_3')->nullable(true);
            // $table->longText('content_3')->nullable(true);
            // $table->string('title_4')->nullable(true);
            // $table->string('description_4')->nullable(true);
            // $table->longText('content_4')->nullable(true);
            // $table->string('title_5')->nullable(true);
            // $table->string('description_5')->nullable(true);
            // $table->longText('content_5')->nullable(true);
            // $table->string('title_6')->nullable(true);
            // $table->string('description_6')->nullable(true);
            // $table->longText('content_6')->nullable(true);
            // $table->string('title_7')->nullable(true);
            // $table->string('description_7')->nullable(true);
            // $table->longText('content_7')->nullable(true);
            // $table->string('title_8')->nullable(true);
            // $table->string('description_8')->nullable(true);
            // $table->longText('content_8')->nullable(true);
            // $table->string('title_9')->nullable(true);
            // $table->string('description_9')->nullable(true);
            // $table->longText('content_9')->nullable(true);
            // $table->string('title_10')->nullable(true);
            // $table->string('description_10')->nullable(true);
            // $table->longText('content_10')->nullable(true);
            // $table->string('title_11')->nullable(true);
            // $table->string('description_11')->nullable(true);
            // $table->longText('content_11')->nullable(true);
            // $table->string('title_12')->nullable(true);
            // $table->string('description_12')->nullable(true);
            // $table->longText('content_12')->nullable(true);
            // $table->string('title_13')->nullable(true);
            // $table->string('description_13')->nullable(true);
            // $table->longText('content_13')->nullable(true);
            // $table->string('title_14')->nullable(true);
            // $table->string('description_14')->nullable(true);
            // $table->longText('content_14')->nullable(true);
            // $table->string('title_15')->nullable(true);
            // $table->string('description_15')->nullable(true);
            // $table->longText('content_15')->nullable(true);
            // $table->string('title_16')->nullable(true);
            // $table->string('description_16')->nullable(true);
            // $table->longText('content_16')->nullable(true);
            // $table->string('title_17')->nullable(true);
            // $table->string('description_17')->nullable(true);
            // $table->longText('content_17')->nullable(true);
            // $table->string('title_18')->nullable(true);
            // $table->string('description_18')->nullable(true);
            // $table->longText('content_18')->nullable(true);
            // $table->string('title_19')->nullable(true);
            // $table->string('description_19')->nullable(true);
            // $table->longText('content_19')->nullable(true);
            // $table->string('title_20')->nullable(true);
            // $table->string('description_20')->nullable(true);
            // $table->longText('content_20')->nullable(true);
            // $table->string('title_21')->nullable(true);
            // $table->string('description_21')->nullable(true);
            // $table->longText('content_21')->nullable(true);
            // $table->string('title_22')->nullable(true);
            // $table->string('description_22')->nullable(true);
            // $table->longText('content_22')->nullable(true);
            // $table->string('title_23')->nullable(true);
            // $table->string('description_23')->nullable(true);
            // $table->longText('content_23')->nullable(true);
            // $table->string('title_24')->nullable(true);
            // $table->string('description_24')->nullable(true);
            // $table->longText('content_24')->nullable(true);
            // $table->string('title_25')->nullable(true);
            // $table->string('description_25')->nullable(true);
            // $table->longText('content_25')->nullable(true);
            // $table->string('title_26')->nullable(true);
            // $table->string('description_26')->nullable(true);
            // $table->longText('content_26')->nullable(true);
            // $table->string('title_27')->nullable(true);
            // $table->string('description_27')->nullable(true);
            // $table->longText('content_27')->nullable(true);
            // $table->string('title_28')->nullable(true);
            // $table->string('description_28')->nullable(true);
            // $table->longText('content_28')->nullable(true);
            // $table->string('title_29')->nullable(true);
            // $table->string('description_29')->nullable(true);
            // $table->longText('content_29')->nullable(true);
            // $table->string('title_30')->nullable(true);
            // $table->string('description_30')->nullable(true);
            // $table->longText('content_30')->nullable(true);
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
        Schema::dropIfExists('pagecontents');
    }
};

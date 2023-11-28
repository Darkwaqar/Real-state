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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('b_id');
            $table->text('blog_title');
            $table->text('b_slug');
            $table->enum('b_type',['blog','news']);
            $table->longText('b_body');
            $table->string('blog_cover');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('admin_id');
            $table->boolean('b_status')->default(0);
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
        Schema::dropIfExists('blogs');
    }
};

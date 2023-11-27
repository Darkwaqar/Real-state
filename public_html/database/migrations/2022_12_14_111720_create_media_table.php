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
        Schema::create('mlsmedia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mlsproperties_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('MediaKey')->nullable(true);
            $table->string('MediaObjectID')->nullable(true);
            $table->string('MediaModificationTimestamp')->nullable(true);
            $table->integer('Order')->nullable(true);
            $table->boolean('status')->comment('status means we have stored on s3 bucket')->default(0)->nullable(true);
            $table->string('thumbnail')->nullable(true);
            $table->tinyInteger('wherfrom')->comment('mls or featured 1 fro mls and 2 for featured')->nullable(true);
            $table->string('PreferredPhotoYN')->nullable(true);
            $table->text('LongDescription')->nullable(true);
            $table->double('ImageWidth')->nullable(true);
            $table->double('ImageHeight')->nullable(true);
            $table->string('ImageSizeDescription')->nullable(true);
            $table->text('MediaURL')->nullable(true);
            $table->text('s3buckettempurl')->comment('We are generating the link for the images of aws s3 bucket')->nullable(true);
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
        Schema::dropIfExists('mlsmedia');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title_en')->nullable();
            $table->mediumText('body_en')->nullable();
            $table->string('image_en')->nullable();
            $table->string('title_te')->nullable();
            $table->mediumText('body_te')->nullable();
            $table->string('image_te')->nullable();
            $table->unsignedInteger('readCount_en')->default(0);
            $table->unsignedInteger('readCount_te')->default(0);
            $table->tinyInteger('status')->default(1)->comment('1=Enabled, 2=Disabled');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

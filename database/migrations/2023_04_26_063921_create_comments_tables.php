<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references("id")->on("users");
            $table->unsignedBigInteger('comic_id')->nullable();
            $table->foreign("comic_id")->references("id")->on("comics");
            $table->unsignedBigInteger('chapter_id')->nullable();
            $table->foreign("chapter_id")->references("id")->on("chapters");
            $table->integer('parent_id')->nullable();
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
        Schema::dropIfExists('comments');
    }
}

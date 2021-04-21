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
<<<<<<< HEAD
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('student_id')->references('id')->on('users')->
=======
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users')
>>>>>>> 9a743cb9f00edcea073d1087e35d5515b5c780bd
            onUpdate('cascade')->onDelete('cascade');
            $table->text('behave_type');
            $table->string('laocation');
            $table->string('action_taken');
            $table->string('body');
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
        Schema::dropIfExists('posts');
    }
}

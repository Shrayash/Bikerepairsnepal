<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_comments', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('news_id')->unsigned()->nullable();
            $table->foreign('news_id')
                  ->references('id')->on('news')
                  ->onDelete('cascade');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->text('subject');
            $table->text('comment');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('news_comments');
    }
}

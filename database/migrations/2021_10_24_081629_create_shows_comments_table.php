<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows_comments', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('shows_id')->unsigned()->nullable();
            $table->foreign('shows_id')
                  ->references('id')->on('shows')
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
        Schema::dropIfExists('shows_comments');
    }
}

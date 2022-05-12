<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_authors', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('fname');
            $table->string('lname');
            $table->string('image');
            $table->integer('users_table_id')->unsigned()->nullable();
            $table->foreign('users_table_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('news_authors');
    }
}

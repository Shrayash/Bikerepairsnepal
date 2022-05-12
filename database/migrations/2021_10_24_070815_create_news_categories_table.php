<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_categories', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('category_title');
            $table->string('slug')->unique();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
        Schema::create('news_sub_categories', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')
                  ->references('id')->on('news_categories')
                  ->onDelete('cascade');
            $table->string('sub_category_title');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('news_categories');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('highlight');
            $table->string('image');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')
                  ->references('id')->on('news_categories')
                  ->onDelete('cascade');
            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')
                  ->references('id')->on('news_authors')
                  ->onDelete('cascade');
            $table->integer('region_id')->unsigned()->nullable();
            $table->foreign('region_id')
                  ->references('id')->on('news_regions')
                  ->onDelete('cascade');
            $table->boolean('is_featured')->default(0);
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
        Schema::dropIfExists('news');
    }
}

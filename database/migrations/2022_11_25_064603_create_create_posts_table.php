<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_posts', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 64);
            $table->integer('product_price');
            $table->string('product_description');
            $table->unsignedBigInteger('author_id');
            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_posts');
    }

    
}

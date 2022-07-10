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
        Schema::create('blog_category', function (Blueprint $table) {
            $table->bigInteger('blog_id')->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->foreign('blog_id')->references('id')->on('blogs');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->primary(['blog_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

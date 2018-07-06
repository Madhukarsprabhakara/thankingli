<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelppostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpposts', function (Blueprint $table) {
            $table->increments('help_post_id');
            $table->string('help_post_title',200);
            $table->string('help_post_descr',5000);
            $table->integer('from_id')->unsigned();
            $table->foreign('from_id')->references('id')->on('users');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('categories');
            $table->integer('sub_cat_id')->unsigned();
            $table->foreign('sub_cat_id')->references('sub_cat_id')->on('sub_categories');  
            $table->string('help_post_image')->nullable();
            $table->integer('private_flag')->nullable();
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
        Schema::dropIfExists('helpposts');
    }
}

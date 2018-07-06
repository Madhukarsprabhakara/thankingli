<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('sub_cat_id');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('categories');
            $table->string('sub_cat_name');
            $table->string('sub_cat_descr')->nullable();
            $table->string('cat_name');
            //$table->foreign('cat_name')->references('cat_name')->on('categories');
            $table->string('keywords');
            $table->string('notes')->nullable();

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
        Schema::dropIfExists('sub_categories');
    }
}

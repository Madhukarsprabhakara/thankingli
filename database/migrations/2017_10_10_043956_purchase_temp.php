<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PurchaseTemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_temps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('to_id')->unsigned()->nullable();
            $table->foreign('to_id')->references('id')->on('users');
            $table->integer('from_id')->unsigned();
            $table->foreign('from_id')->references('id')->on('users');
            $table->string('to_email');
            $table->string('session_id');
            $table->integer('post_id');
            $table->string('to_name');
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
        Schema::dropIfExists('purchase_temps');
    }
}

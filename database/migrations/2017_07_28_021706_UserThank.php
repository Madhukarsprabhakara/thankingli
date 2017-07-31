<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserThank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_thanks', function (Blueprint $table) {
        	$table->increments('post_thank_id');
            $table->integer('from_id')->unsigned();
            $table->foreign('from_id')->references('id')->on('users');
            $table->string('from_name');
            $table->integer('to_id')->nullable()->default('0');;
            $table->string('to_name')->nullable();
            $table->string('to_email')->nullable();
            $table->string('image')->nullable();
            $table->string('thank_title',100);
            $table->string('thank_description',500);
            //$table->timestamps('');
            //$table->foreign('from_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_thanks');
    }
}

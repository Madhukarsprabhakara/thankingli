<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PurchaseCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id');
            $table->integer('product_id');
            $table->integer('purchase_code');
            //$table->integer('to_id');
            $table->integer('from_id');
            $table->integer('used_code_flag');
            $table->string('session_id');
            $table->integer('to_id');
            $table->string('to_email');
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
        Schema::dropIfExists('purchase_codes');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsColumnToHelpposts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
           Schema::table('helpposts', function (Blueprint $table) {
            
                $table->string('tags',500)->nullable();
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
        // Schema::table('helpposts', function (Blueprint $table) {
            
        //         $table->string('tags',500)->nullable();
        //      });
    }
}

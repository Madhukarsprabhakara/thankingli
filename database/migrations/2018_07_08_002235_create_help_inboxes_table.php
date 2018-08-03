<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpInboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_inboxes', function (Blueprint $table) {
            $table->increments('in_id');
            $table->integer('belongs_id')->unsigned();
            $table->foreign('belongs_id')->references('id')->on('users');
            $table->integer('from_id')->unsigned();
            $table->foreign('from_id')->references('id')->on('users');
            $table->string('from_name')->nullable();
            $table->integer('help_post_id')->unsigned();
            $table->foreign('help_post_id')->references('help_post_id')->on('helpposts');
            $table->string('help_post_title')->nullable();
            $table->string('help_text',5000);
            $table->string('help_image')->nullable();
            $table->integer('seen_flag');
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
        Schema::dropIfExists('help_inboxes');
    }
}

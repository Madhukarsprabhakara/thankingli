<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpInboxMsgRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_inbox_msg_replies', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->integer('in_id')->unsigned();
            $table->foreign('in_id')->references('in_id')->on('help_inboxes');
            $table->integer('help_post_id')->unsigned();
            $table->foreign('help_post_id')->references('help_post_id')->on('helpposts');
            $table->string('comment_from_name');
            $table->string('comment_text');
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
        Schema::dropIfExists('help_inbox_msg_replies');
    }
}

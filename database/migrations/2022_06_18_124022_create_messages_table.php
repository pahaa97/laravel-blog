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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('chat_id');
            $table->string('from_user_id');
            $table->string('message');
            $table->timestamps();

            $table->index('from_user_id', 'messages_user_idx');
            $table->index('chat_id','messages_chat_idx');

            $table->foreign('from_user_id', 'messages_user_fk')->on('users')->references('id');
            $table->foreign('chat_id', 'messages_chat_fk')->on('chats')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};

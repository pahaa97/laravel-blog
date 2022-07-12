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
        Schema::create('users_chats', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('chat_id');

            $table->index('user_id','uc_user_idx');
            $table->index('chat_id','uc_chat_idx');

            $table->foreign('user_id','uc_user_fk')->on('users')->references('id');
            $table->foreign('chat_id','uc_chat_fk')->on('chats')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_chats');
    }
};

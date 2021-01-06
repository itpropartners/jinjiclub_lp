<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateChatGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_groups', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            ;
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `chat_groups` COMMENT 'チャットグループ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_groups');
    }
}

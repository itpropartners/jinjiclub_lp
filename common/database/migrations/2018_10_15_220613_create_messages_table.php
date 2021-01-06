<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->text('body')->comment('メッセージ');
            $table->string('file_path', 255)->default('')->comment('ファイル保存先パス');
            $table->integer('chat_group_id')->unsigned()->comment('チャットグループID');
            $table->integer('chat_member_id')->unsigned()->comment('チャットメンバーID');
            $table->integer('from_id')->comment('送り主ID');

            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('chat_group_id')->references('id')->on('chat_groups')->onDelete('cascade');
            $table->foreign('chat_member_id')->references('id')->on('chat_members')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `messages` COMMENT 'メッセージ'");
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
}

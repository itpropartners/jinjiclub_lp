<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateReadMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('read_messages', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->integer('admin_id')->unsigned()->nullable()->comment('管理者ID');
            $table->integer('client_id')->unsigned()->nullable()->comment('企業担当者ID');
            $table->integer('user_id')->unsigned()->nullable()->comment('求職者ID');
            $table->integer('message_id')->unsigned()->comment('メッセージID');
            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `read_messages` COMMENT '既読メッセージ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('read_messages');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateReplyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_contacts', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->integer('contact_id')->unsigned()->comment('お問い合わせID');
            $table->integer('admin_id')->unsigned()->comment('管理者ID');
            $table->text('reply_body')->comment('返信メッセージ');

            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `reply_contacts` COMMENT '問い合わせ返信'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reply_contacts');
    }
}

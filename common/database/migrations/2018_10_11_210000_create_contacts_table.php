<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('first_name', 255)->comment('名');
            $table->string('last_name', 255)->comment('性');
            $table->string('email', 255)->comment('メールアドレス');
            $table->unsignedTinyInteger('type_id')->comment('項目');
            $table->unsignedTinyInteger('reply_status')->default(1)->comment('返信ステータス');
            $table->text('body')->comment('メッセージ');
            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `contacts` COMMENT '問い合わせ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('first_name', 255)->comment('名');
            $table->string('last_name', 255)->comment('性');
            $table->string('first_name_kana', 255)->comment('名(カナ)');
            $table->string('last_name_kana', 255)->comment('性(カナ)');
            $table->date('birthday')->nullable()->comment('生年月日');
            $table->unsignedTinyInteger('gender')->nullable()->comment('性別');
            $table->string('password', 255)->comment('パスワード');
            $table->string('email', 255)->comment('メールアドレス');
            $table->string('avatar_path', 255)->comment('アバター画像');
            $table->unsignedInteger('region_id')->nullable()->comment('都道府県ID');
            $table->string('address1', 255)->default('')->comment('住所');
            $table->string('address2', 255)->default('')->comment('ビル名、建物名');
            $table->string('postcode', 255)->default('')->comment('郵便番号');
            $table->string('tel', 255)->comment('電話番号');
            $table->string('remember_token', 100)->default('')->comment('パスワードトークン');
            $table->timestamp('loggedin_at')->nullable()->comment('最終ログイン');

            $table->timestamp('deleted_at')->nullable()->comment('退会日時');
            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('region_id')->references('id')->on('master_prefectures')->onDelete('cascade');

            $table->unique('email', 'email');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `admins` COMMENT '管理者'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

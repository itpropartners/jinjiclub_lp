<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCompanyScoutUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_scout_users', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->integer('company_id')->unsigned()->comment('企業ID');
            $table->integer('user_id')->unsigned()->comment('求職者ID');
            $table->integer('chat_group_id')->unsigned()->comment('チャットグループID');
            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('chat_group_id')->references('id')->on('chat_groups')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `company_scout_users` COMMENT '企業がスカウトしたユーザー'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_scout_users');
    }
}

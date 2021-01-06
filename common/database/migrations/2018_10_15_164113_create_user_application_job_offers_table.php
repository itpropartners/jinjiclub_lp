<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUserApplicationJobOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_application_job_offers', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->integer('user_id')->unsigned()->comment('求職者ID');
            $table->integer('project_id')->unsigned()->comment('案件ID');
            $table->integer('chat_group_id')->unsigned()->comment('チャットグループID');
            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('chat_group_id')->references('id')->on('chat_groups')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `user_application_job_offers` COMMENT '案件応募'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_application_job_offers');
    }
}

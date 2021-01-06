<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUserJobConditionMasterPrefecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_job_condition_master_prefectures', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->integer('user_job_condition_id')->unsigned()->comment('求職情報ID');
            $table->integer('master_prefecture_id')->unsigned()->comment('都道府県ID');
            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('user_job_condition_id', 'u_j_c_id_m_p_u_j_c_id_foreign')->references('id')->on('user_job_conditions')->onDelete('cascade');
            $table->foreign('master_prefecture_id', 'm_p_id_m_p_u_j_c_id_foreign')->references('id')->on('master_prefectures')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `user_job_condition_master_prefectures` COMMENT '中間テーブル'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_job_condition_master_prefectures');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUserJobConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_job_conditions', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->unsignedInteger('user_id')->comment('求職者ID');
            $table->string('work_date', 255)->nullable()->comment('勤務頻度');
            $table->string('desired_salary', 255)->nullable()->comment('希望年収');
            $table->string('job_change_season', 255)->nullable()->comment('転職意欲');
            $table->text('introduction')->nullable()->comment('自己PR');

            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `user_job_conditions` COMMENT '求職情報'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_job_conditions');
    }
}

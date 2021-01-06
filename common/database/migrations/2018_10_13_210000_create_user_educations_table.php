<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUserEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_educations', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->unsignedInteger('user_id')->comment('求職者ID');
            $table->string('school_name', 255)->nullable()->comment('学校名');
            $table->string('department', 255)->nullable()->comment('学科');
            $table->date('admission_date')->nullable()->comment('入学年月');
            $table->date('graduation_date')->nullable()->comment('卒業年月');
            $table->unsignedInteger('education_state')->nullable()->comment('卒業状況');

            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `user_educations` COMMENT '学歴'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_educations');
    }
}

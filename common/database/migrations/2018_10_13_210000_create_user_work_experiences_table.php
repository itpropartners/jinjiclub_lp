<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUserWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_work_experiences', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->unsignedInteger('user_id')->comment('求職者ID');
            $table->string('company_name', 255)->nullable()->comment('企業名');
            $table->string('department', 255)->nullable()->comment('部署');
            $table->string('position', 255)->nullable()->comment('職位');
            $table->unsignedInteger('work_state')->nullable()->comment('就業状況');
            $table->date('start_date')->nullable()->comment('就業開始年月');
            $table->date('end_date')->nullable()->comment('就業終了年月');

            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `user_work_experiences` COMMENT '職歴'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_work_experiences');
    }
}

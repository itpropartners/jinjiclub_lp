<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateMasterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_prefectures', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('name', 255)->comment('都道府県名');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `master_prefectures` COMMENT '都道府県マスタ'");

        Schema::create('master_employment_statuses', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('name', 255)->comment('雇用区分名');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `master_employment_statuses` COMMENT '雇用ステータスマスタ'");

        Schema::create('master_job_change_seasons', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('name', 255)->comment('転職希望時期名');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `master_job_change_seasons` COMMENT '転職希望時期マスタ'");

        Schema::create('master_job_categories', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('name', 255)->comment('業種名');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `master_job_categories` COMMENT '業種マスタ'");
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_prefectures');
        Schema::dropIfExists('master_employment_statuses');
        Schema::dropIfExists('master_job_change_seasons');
        Schema::dropIfExists('master_job_categories');
    }
}

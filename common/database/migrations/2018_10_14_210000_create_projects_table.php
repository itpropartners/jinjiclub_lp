<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->unsignedInteger('company_id')->comment('企業ID');
            $table->string('thumbnail_path', 255)->comment('サムネイル画像');
            $table->string('title', 255)->comment('案件名');
            $table->unsignedInteger('job_category_id')->comment('業種');
            $table->text('reason')->comment('募集背景');
            $table->text('requirement')->comment('仕事内容');
            $table->text('qualification')->comment('応募資格');
            $table->text('place')->comment('勤務地');
            $table->string('annual_salary_min', 255)->comment('最低年収');
            $table->string('annual_salary_max', 255)->comment('最高年収');
            $table->text('salary_detail')->comment('給与');
            $table->unsignedInteger('master_employment_status_id')->comment('雇用形態');
            $table->text('benefit')->comment('福利厚生');
            $table->text('holiday')->comment('休日・休暇');
            $table->text('selection_process')->comment('選考プロセス');
            $table->unsignedTinyInteger('posting_status')->default(1)->comment('掲載状態');

            $table->timestamp('deleted_at')->nullable()->comment('削除日時');
            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('job_category_id')->references('id')->on('master_job_categories')->onDelete('cascade');
            $table->foreign('master_employment_status_id')->references('id')->on('master_employment_statuses')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `projects` COMMENT '案件'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

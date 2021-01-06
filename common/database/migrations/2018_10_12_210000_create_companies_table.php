<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id')->comment('主キー');
            $table->string('name', 255)->comment('会社名');
            $table->string('logo_path', 255)->comment('ロゴ画像');
            $table->string('main_img_path', 255)->default('')->comment('メイン画像');
            $table->string('president_first_name', 255)->comment('代表者(姓)');
            $table->string('president_last_name', 255)->comment('代表者(名)');
            $table->string('president_first_name_kana', 255)->comment('代表者(姓)カナ');
            $table->string('president_last_name_kana', 255)->comment('代表者(名)カナ');
            $table->text('profile')->nullable()->comment('会社概要');
            $table->date('foundation_date')->nullable()->comment('創業年月日');
            $table->unsignedBigInteger('capital')->nullable()->comment('資本金');
            $table->unsignedInteger('employee_number')->nullable()->comment('従業員数');
            $table->unsignedInteger('region_id')->nullable()->comment('都道府県ID');
            $table->string('address1', 255)->comment('住所');
            $table->string('address2', 255)->comment('ビル名、建物名');
            $table->string('postcode', 255)->comment('郵便番号');
            $table->string('tel', 255)->comment('電話番号');
            $table->string('website', 255)->comment('URL');

            $table->timestamp('created_at')->comment('作成日時')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->comment('更新日時')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // 外部キー制約
            $table->foreign('region_id')->references('id')->on('master_prefectures')->onDelete('cascade');
        });
        // テーブルコメント設定
        DB::statement("ALTER TABLE `companies` COMMENT '企業'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}

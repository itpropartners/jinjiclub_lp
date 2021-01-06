<?php

use Illuminate\Database\Seeder;

class MasterJobCategoriesTableSeeder extends Seeder
{
    public $names = [
        1 => 'エンジニア',
        2 => 'デザイナー',
        3 => 'ディレクター',
        4 => 'セールス',
        5 => 'マーケティング',
        6 => 'ライター',
        7 => 'コーポレート・スタッフ',
        8 => 'その他',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('master_job_categories')->truncate();
        foreach ($this->names as $key => $value) {
            DB::table('master_job_categories')->insert([
                'id' => $key,
                'name' => $value,
            ]);
        }
    }
}

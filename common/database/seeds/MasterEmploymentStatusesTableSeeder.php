<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MasterEmploymentStatusesTableSeeder extends Seeder
{
    public $names = [
        1 => '正社員',
        2 => '契約社員',
        3 => 'パートタイマー',
        4 => 'アルバイト',
        5 => '派遣',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('master_employment_statuses')->truncate();
        foreach ($this->names as $key => $value) {
            DB::table('master_employment_statuses')->insert([
                'id' => $key,
                'name' => $value,
            ]);
        }
    }
}

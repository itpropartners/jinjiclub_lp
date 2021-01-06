<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MasterJobChangeSeasonsTableSeeder extends Seeder
{
    public $names = [
            1 => 'すぐにでも',
            2 => '３か月以内',
            3 => '半年以内',
            4 => '１年以内',
            5 => '未定',
        ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('master_job_change_seasons')->truncate();
        foreach ($this->names as $key => $value) {
            DB::table('master_job_change_seasons')->insert([
                'id' => $key,
                'name' => $value,
            ]);
        }
    }
}

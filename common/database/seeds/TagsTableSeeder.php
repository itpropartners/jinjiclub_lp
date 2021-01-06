<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tags')->insert([
            [
                'name' => 'Javascript',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PHP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CSS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HTML',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ruby',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MasterPrefecturesTableSeeder::class);
        $this->call(MasterJobChangeSeasonsTableSeeder::class);
        $this->call(MasterEmploymentStatusesTableSeeder::class);
        $this->call(MasterJobCategoriesTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
    }
}

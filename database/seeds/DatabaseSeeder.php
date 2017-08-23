<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(JudgeOptionsSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(SuperUserTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);

    }
}

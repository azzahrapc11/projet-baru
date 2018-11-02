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
        // $this->call(UsersTableSeeder::class);
		
		$this->call(Mahasiswa_Create_Seeder::class);
		$this->call(UserSeeder::class);
		
    }
}

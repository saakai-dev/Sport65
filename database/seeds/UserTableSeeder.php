<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUsers = [
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('admin')],
            ['name' => 'user', 'email' => 'user@gmail.com', 'password' => bcrypt('user')],];
        DB::table('users')->insert($dataUsers);
    }
}

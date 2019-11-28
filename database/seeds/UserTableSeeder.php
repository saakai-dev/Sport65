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
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'phone' => '0912394260', 'password' => bcrypt('admin')],
            ['name' => 'user', 'email' => 'user@gmail.com', 'phone' => '0114847667', 'password' => bcrypt('user')],];
        DB::table('users')->insert($dataUsers);
    }
}

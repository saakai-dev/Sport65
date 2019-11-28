<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [['name' => 'Admin'], ['name' => 'blog'], ['name'=> 'user']];

        DB::table('roles')->insert($datas);
    }
}

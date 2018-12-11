<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::connection('company')->table('user_roles')->insert([
            'user_id' => 1,
            'see_menu' => 1,
            'see_bar' => 1,
            'see_title'=>0,
            'see_hello'=>0,
        ]);

        DB::connection('company')->table('user_roles')->insert([
            'user_id' => 2,
            'see_menu' => 1,
            'see_bar' => 1,
            'see_title'=>1,
            'see_hello'=>0,
        ]);

        DB::connection('company')->table('user_roles')->insert([
            'user_id' => 3,
            'see_menu' => 1,
            'see_bar' => 1,
            'see_title'=>1,
            'see_hello'=>1,
        ]);
    }
}

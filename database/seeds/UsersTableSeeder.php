<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('qwe123'),
            'user_type'=>'user',
            'company'=>'company',
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('qwe123'),
            'user_type'=>'manager',
            'company'=>'company',
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('qwe123'),
            'user_type'=>'admin',
            'company'=>'company',
        ]);
    }
}

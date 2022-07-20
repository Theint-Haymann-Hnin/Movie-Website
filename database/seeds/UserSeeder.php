<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        DB::table('role_users')->insert([
            'user_id' => 1,
            'role_id'=>1,
        ]);
        DB::table('users')->insert([
            'name' => 'Theint Haymann Hnin',
            'email'=>'haymann.hh@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        DB::table('role_users')->insert([
            'user_id' => 2,
            'role_id'=>2,
        ]);
        DB::table('users')->insert([
            'name' => 'Khine Zin Thaw',
            'email'=>'kzt@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        DB::table('role_users')->insert([
            'user_id' => 3,
            'role_id'=>2,
        ]);
        DB::table('users')->insert([
            'name' => 'Su Thinzar Nwe',
            'email'=>'su@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        DB::table('role_users')->insert([
            'user_id' => 4,
            'role_id'=>2,
        ]);
        
    }
}

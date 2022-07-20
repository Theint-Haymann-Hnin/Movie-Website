<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Action',
        ]);
        DB::table('genres')->insert([
            'name' => 'Adventure',
        ]);
        DB::table('genres')->insert([
            'name' => 'Comedy',
        ]);
        DB::table('genres')->insert([
            'name' => 'Crime',
        ]);
        DB::table('genres')->insert([
            'name' => 'Drama',
        ]);
        DB::table('genres')->insert([
            'name' => 'Historical',
        ]);
        DB::table('genres')->insert([
            'name' => 'Horror',
        ]);
        DB::table('genres')->insert([
            'name' => 'Romance',
        ]);
        DB::table('genres')->insert([
            'name' => 'Social',
        ]);
        DB::table('genres')->insert([
            'name' => 'Thriller',
        ]);
        DB::table('genres')->insert([
            'name' => 'Political',
        ]);
    }
}

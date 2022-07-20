<?php

use Illuminate\Database\Seeder;

class ActressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actresses')->insert([
            'name' => 'Cate Blanchett ',
            'description'=>'Cate Blanchett was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Frances Louise McDormand',
            'description'=>'Frances Louise McDormand was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Sigourney Weaver',
            'description'=>'Sigourney Weaver was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Charlize Theron ',
            'description'=>'Charlize Theron  was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Jodie Foster',
            'description'=>'Jodie Foster was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Rachel Anne McAdams',
            'description'=>'Rachel Anne McAdams was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Julie Delpy',
            'description'=>'Julie Delpy was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Keira Christina ',
            'description'=>'Keira Christina  was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Kim Novak',
            'description'=>'Kim Novak was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
        DB::table('actresses')->insert([
            'name' => 'Margot Elise Robbie',
            'description'=>'Margot Elise Robbie was born on May 14, 1969 in Melbourne, Victoria, Australia, to June (Gamble), an Australian teacher and property developer, and Robert DeWitt Blanchett, Jr., an American advertising executive, originally from Texas. She has an older brother and a younger sister'
        ]);
    }
}

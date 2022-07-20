<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Warner Bros Entertainment',
            'description'=>'Warner Bros  Entertainment was founded in 1923 and has created some of the best movies which have innovated the industry, such as The Jazz Singer introducing synchronized sound. The studio is owned by Time Warner.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Sony Pictures Motion Picture Group',
            'description'=>'Their biggest asset may very well be Columbia Pictures, which has been producing movies since 1924. Sony certainly have the power to change any industry they enter into and the film industry is no exception.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Walt Disney Studios',
            'description'=>'Walt Disney Studios is the entertainment unit of The Walt Disney Company. The studio has produced some great movies over the years that have impacted many peoples lives, especially younger audiences.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Universal Pictures',
            'description'=>'Universal Studios has produced some timeless classics over the years. Their major box office hits include Jurassic Park, E.T. the Extra-Terrestrial and Jaws, which were all directed by Steven Spielberg.'
        ]);
        DB::table('companies')->insert([
            'name' => '20th Century Fox',
            'description'=>'20th Century Fox is one of the Big Six studios. It was owned by New Corporation from 1984 to 2013. That company split into News Corp and 21st Century Fox, the latter of which currently owns the studio.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Paramount Pictures',
            'description'=>'The study was founded in 1912 and they have produced some of the greatest movies ever. Their most successful movie ever is Titanic, which has gathered a worldwide gross of over $2 billion.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Lionsgate Films',
            'description'=>'Lionsgate has its origins go back to 1962 with the founding of Cinépix in Montreal. They would be purchased by the Lion Gate Entertainment Group in 1997 to form the studio as it is known today. They have succeeded through the help of other studios they have acquired such as Trimark Pictures, Vestron Pictures and Artisan Entertainment.'
        ]);
        DB::table('companies')->insert([
            'name' => 'The Weinstein Company',
            'description'=>'This studio was at one point the largest mini-major studio in Hollywood. Their successful films included Derailed, Scream 4 and 1408. They quickly gained a reputation for churning out quality films that became profitable. Their highest grossing film is Django Unchained, which received over $425 million at the box office in worldwide gross.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Metro-Goldwyn-Mayer Studios',
            'description'=>'etro-Goldwyn-Mayer Studios (aka Metro Goldwyn Mayer, Metro Goldwyn Pictures and MGM) is an American media company which primarily produces movies and television programs. They were founded in 1924 and were the largest and most revered studio at the time. They were bought and sold multiple times over the years until they filed for bankruptcy in 2010. They recovered but are now considered a mini-major studio.'
        ]);
        DB::table('companies')->insert([
            'name' => 'DreamWorks Pictures',
            'description'=>'Some of their best films include Saving Private Ryan, Gladiator and Transformers. The studio was doing well around the turn of the millennium by winning three Academy Awards for Best Picture and having box office grosses of over $100 million. However, debt of over $400 million led to the sale to Viacom in 2005.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Aleph Producciones',
            'description'=>' A production company may specialize in producing their in-house films or own subsidiary development companies. Major production companies often distribute films from independent production companies. This list includes both active and no longer active (defunct) companies. Active production companies are either run by themselves or as a subsidiary'
        ]);
        DB::table('companies')->insert([
            'name' => 'Monsoon Films',
            'description'=>'Monsoon Films is a Bangladeshi entertainment company established by Ananta Jalil, a Bangladeshi film actor, director and producer. His wife Afiea Nusrat Barsha is managing director of Monsoon Films'
        ]);
    }
}

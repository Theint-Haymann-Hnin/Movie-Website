<?php

use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('writers')->insert([
            'name' => 'Fyodor Mikhailovich Dostoevsky',
            'description'=>'Fyodor Mikhailovich Dostoevsky was born on November 11, 1821, in Moscow, Russia. He was the second of seven children of Mikhail Andreevich and Maria Dostoevsky. His father, a doctor, was a member of the Russian nobility, owned serfs and had a considerable estate near Moscow '
        ]);
        DB::table('writers')->insert([
            'name' => 'Dante Alighieri ',
            'description'=>'Franz Kafka was born into a German-speaking Jewish family in Prague, Austrian Empire, in 1883. His father, Hermann Kafka, was a business owner and a domestic tyrant, frequently abusing his son. Kafka later admitted to his father, "My writing was all about you...".'
        ]);
        DB::table('writers')->insert([
            'name' => 'Lev Nikolaevich Tolstoy',
            'description'=>'Count Lev Nikolaevich Tolstoy was born on September 9, 1828, in his ancestral estate Yasnaya Polyana, South of Moscow, Russia. He was the fourth of five children in a wealthy family of Russian landed Gentry. His parents died when he was a child, and he was brought up by his elder brothers'
        ]);
        DB::table('writers')->insert([
            'name' => 'Victor Hugo',
            'description'=>'Although Hugo was fascinated by poems from childhood on, he spent some time on the polytechnic university of Paris until he dedicated all his work to literature. He was one of the few authors who were allowed to reach popularity during lifetime and one of the leaders of French romance.'
        ]);
        DB::table('writers')->insert([
            'name' => 'William Shakespeare',
            'description'=>'William Shakespeare, Scholar in Religious Sciences and famed Sufi Mystic Poet, was born on September 29th 1207 A.D. in Balkh (modern day Afghanistan). Escaping Mongol invasions he travelled extensively to Muslim lands, Bagdad, Mecca, Damascus, Malatia (Turkey)'
        ]);
        DB::table('writers')->insert([
            'name' => 'Italo Calvino',
            'description'=>'Italo Calvino, Scholar in Religious Sciences and famed Sufi Mystic Poet, was born on September 29th 1207 A.D. in Balkh (modern day Afghanistan). Escaping Mongol invasions he travelled extensively to Muslim lands, Bagdad, Mecca, Damascus, Malatia (Turkey)'
        ]);
        DB::table('writers')->insert([
            'name' => 'Charles Baudelaire',
            'description'=>'Charles Baudelaire, Scholar in Religious Sciences and famed Sufi Mystic Poet, was born on September 29th 1207 A.D. in Balkh (modern day Afghanistan). Escaping Mongol invasions he travelled extensively to Muslim lands, Bagdad, Mecca, Damascus, Malatia (Turkey)'
        ]);
        DB::table('writers')->insert([
            'name' => 'Jalaluddin Rumi',
            'description'=>'Jalaluddin Rumi, Scholar in Religious Sciences and famed Sufi Mystic Poet, was born on September 29th 1207 A.D. in Balkh (modern day Afghanistan). Escaping Mongol invasions he travelled extensively to Muslim lands, Bagdad, Mecca, Damascus, Malatia (Turkey)'
        ]);
        DB::table('writers')->insert([
            'name' => 'Franz Kafka',
            'description'=>'Franz Kafka was born into a German-speaking Jewish family in Prague, Austrian Empire, in 1883. His father, Hermann Kafka, was a business owner and a domestic tyrant, frequently abusing his son. Kafka later admitted to his father, "My writing was all about you...".'
        ]);
    }
}

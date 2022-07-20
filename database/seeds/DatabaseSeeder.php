<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
         $this->call(RoleSeeder::class);
         $this->call(UserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(WriterSeeder::class);
        $this->call(ActressSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(MovieSeeder::class);
    }
    
       
        
  
}

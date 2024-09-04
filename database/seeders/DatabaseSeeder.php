<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\userPractica;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

    userPractica::factory(20)->create();
        


        
    }
}

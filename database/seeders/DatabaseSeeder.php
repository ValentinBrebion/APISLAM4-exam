<?php

namespace Database\Seeders;
use App\Models\Client;
use App\Models\Produit;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Client::factory()->count(50)->create();
        Produit::factory()->count(50)->create();
    }
}

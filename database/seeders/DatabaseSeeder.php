<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'birthday' => '1991-01-21',
            'UserName' => 'teste'
        ]);

        User::factory()->create([
            'name' => 'Portugal',
            'password' => 'admin',
            'email' => 'Portugal@Facebook.com',
            'birthday' => '1991-01-21'
        ]);

        $this->call([
            CategorySeeder::class,
            FilmSeeder::class,
            ActorSeeder::class,
            AploadSeeder::class,
            NoticiaFilmeSeeder::class,
            NoticiafamososSeeder::class,
            ImageSeeder::class,
            PremiosSeeder::class,   
            WatchlistSeeder::class,
            RankingSeeder::class,
        ]);
    }
}
   
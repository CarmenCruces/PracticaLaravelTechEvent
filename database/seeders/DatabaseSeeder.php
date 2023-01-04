<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Event::factory()->create([
            'name' => 'Venom',
            'description' => 'Revienta la presa de Chicago',
            'spaces' => '15',
            'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Ffondosmil.com%2Fvenom&psig=AOvVaw1AnhWRsfDUpIQ4jmS99DsU&ust=1672338096414000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCLi804L3nPwCFQAAAAAdAAAAABAE',
            'datetime' => '2023-01-25 16:30:00',
        ]);
        Event::factory()->create([
            'name' => 'Loky',
            'description' => 'Arrasa Bahamas',
            'spaces' => '12',
            'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Ffondosmil.com%2Fvenom&psig=AOvVaw1AnhWRsfDUpIQ4jmS99DsU&ust=1672338096414000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCLi804L3nPwCFQAAAAAdAAAAABAE',
            'datetime' => '2023-01-20 12:30:00',
        ]);

        Event::factory(30)->create();
    }
}

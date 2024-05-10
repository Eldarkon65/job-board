<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Eldar Bauyrzhan',
            'email' => 'eldarkon65@gmail.com'
        ]);

        User::factory(300)->create();
        $user = User::all()->shuffle();

        for ($i=0; $i < 20; $i++ )
        {
            Employer::factory()->create([
                'user_id' => $user->pop()->id
            ]);
        }

        $employers = Employer::all()->shuffle();

        for ($i = 0; $i < 100; $i++)
        {
            Vacancy::factory()->create([
                'employer_id' => $employers->random()->id
            ]);
        }
    }
}

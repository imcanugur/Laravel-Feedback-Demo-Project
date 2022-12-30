<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Feedback;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        for ($Counter = 0; $Counter < 50; $Counter++) {
            Feedback::create([
                'name' => fake()->name(),
                'mail' => fake()->freeEmail(),
                'message' => fake()->text(),
            ]);
        }


        for ($Counter = 0; $Counter < 10; $Counter++) {
            Admin::create([
                'name' => fake()->name(),
                'mail' => 'admin'.$Counter.'@gmail.com',
                'password' => Hash::make('admin'),
            ]);
        }
    }
}

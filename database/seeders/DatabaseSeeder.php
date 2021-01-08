<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
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
        User::factory()
            ->has(Task::factory()->count(10))
            ->create([
                'name' => 'Zuck Levente',
                'email' => 'zuck.levente@engineed.hu',
                'password' => Hash::make('password'),
            ]);

        User::factory()
            ->has(Task::factory()->count(10))
            ->count(30)
            ->create();
    }
}

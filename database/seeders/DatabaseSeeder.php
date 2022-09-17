<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create([
            'name' => 'Divyesh',
            'email' => '149dvs@gmail.com',
            'password' => \bcrypt('admin123')
        ]);

        \App\Models\Bookmark::factory(10)->create([
            'is_active' => 1,
        ]);
    }
}

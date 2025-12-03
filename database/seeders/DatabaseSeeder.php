<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $adminRole = Role::findByName('admin');
        $user->assignRole($adminRole);

        $this->call([
            GeneralSettingSeeder::class,
            AmenitySeeder::class,
            PropertySeeder::class,
            PostSeeder::class,
            ProjectSeeder::class,
            ContactSeeder::class,
        ]);
    }
}

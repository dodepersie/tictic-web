<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user1 = User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@tictic.id',
        ]);

        User::factory()->create([
            'name' => 'Merchant',
            'email' => 'merchant@tictic.id',
        ]);

        $role = Role::create(['name' => 'Admin']);
        $user1->assignRole($role);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create([
            'name' => 'admin',
        ]);

        $mentorRole = Role::create([
            'name' => 'mentor',
        ]);

        $studentRole = Role::create([
            'name' => 'student',
        ]);

        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        $userAdmin->assignRole($adminRole);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Create admin role and assign all permissions
        $role = Role::create(['name' => 'Admin']);
        $role->syncPermissions(Permission::pluck('id'));

        // Create users and assign admin role
        User::factory()
            ->count(1)
            ->create()
            ->each(fn ($user) => $user->assignRole($role));
    }
}

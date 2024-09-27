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

        $user = User::create([
            'name' => 'Admin',
            'password' => bcrypt('hypervision2020'),
            'code' => '000001',
            'phone' => '01201026745',
            'address' => 'fafa',
            'date_of_birth' => now()->format('Y-m-d'),
            'date_of_hiring' => now()->format('Y-m-d'),
            'learning' => 'Bachelor',
            'reiligon' => '1',
            'type' => '1',
            'email_verified_at' => now(),
            'email' => 'admin@schoolstepup.com',
            'isAdmin' => '1',
            'login_allow' => '1']);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}

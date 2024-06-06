<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'name' => 'Rahul Shukla',
            'password' => bcrypt('123456'),
            'code' =>'11111',
            'phone' => '01201026745',
            'address' =>'fafa',
            'date_of_birth' => now()->format('Y-m-d'),
            'date_of_hiring' => now()->format('Y-m-d'),
            'learning' => 'Bachelor',
            'reiligon' => '1',
            'type' => '1',
            'email_verified_at' => now(),
            'email' => 'a@a.com',
            'isAdmin' => '1',
            'login_allow' => '1',]);
        $role = Role::create(['name' => 'Admin']);$permissions = Permission::pluck('id','id')->all();$role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
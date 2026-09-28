<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Adminstrator';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('<===============Start Create Admin Data===============>');
        $name = $this->ask('Enter Admin Name');
        $email = $this->ask('Enter Admin Email');
        $password = $this->secret('Enter Admin Password');
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
        $user->assignRole('Admin');
        $this->info('<===============Admin Created Successfully===============>');
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ConferenceParticipant;

class CreateAdmin extends Command
{
    protected $signature = 'create:admin';
    protected $description = 'Create an admin user';

    public function handle()
    {
        $name = $this->ask('Enter the name for the admin:');
        $email = $this->ask('Enter the email for the admin:');
        $password = $this->secret('Enter the password for the admin:');

        ConferenceParticipant::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => 'admin',
        ]);

        $this->info('Admin user created successfully!');
    }
}

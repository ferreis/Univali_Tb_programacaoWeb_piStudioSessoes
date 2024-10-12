<?php

namespace Database\Seeders;
use App\Models\Cliente;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\ClientesFactory;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ClientesSeeder::class);
        $user = User::factory()->create([
            'name' => 'Dev User',
            'email' => 'dev',
            'username' => 'teste',
            'password' => bcrypt('1234'),
        ]);
    }
}

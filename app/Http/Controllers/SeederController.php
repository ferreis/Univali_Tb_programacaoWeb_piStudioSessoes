<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;

class SeederController extends Controller
{
    public function runSeeder()
    {
        // Executar o seeder de Usuário
        User::create([
            'name' => 'Dev User',
            'email' => 'dev@example.com',
            'username' => 'teste',
            'password' => bcrypt('1234'),
        ]);

        // Redirecionar para a tela de login
        return redirect('/login')->with('success', 'Seeders executados com sucesso!');
    }
}

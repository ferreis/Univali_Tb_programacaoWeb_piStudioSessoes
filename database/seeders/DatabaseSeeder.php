<?php

namespace Database\Seeders;
use App\Models\Cliente;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\ClientesFactory;
use GuzzleHttp\Client;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Rafael',
            'email' => 'rafa_ferreis@hotmail.com',
            'username' => 'ferreis',
            'password' => bcrypt('1234'),
            'telefone' => '47999999999',
            'cpf' => '27368859025', //https://www.4devs.com.br/gerador_de_cpf
            'rg' => '351410417', //https://www.4devs.com.br/gerador_de_rg
            'endereco' => '123456789',
        ]);
        // Loop para criar 10 clientes
        for ($i = 0; $i < 10; $i++) {
            Cliente::create([
                'nome' => 'Nome ' . $i,
                'razao_social' => 'Razão Social ' . $i,
                'nome_fantasia' => 'Nome Fantasia ' . $i,
                'cnpj' => '00.000.000/000' . $i,
                'email' => 'cliente' . $i . '@exemplo.com',
                'telefone' => '12345678' . $i,
                'endereco' => 'Endereço ' . $i,
                'cidade' => 'Cidade ' . $i,
                'estado' => 'Estado ' . $i,
                'cep' => '00000-00' . $i,
                'pais' => 'País ' . $i,
                'ultima_sessao' => now()->subDays(rand(1, 30)),
                'prox_sessao' => now()->addDays(rand(1, 30)),
            ]);
        }
    }
}

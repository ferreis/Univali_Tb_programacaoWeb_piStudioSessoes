<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Loop para criar 10 clientes
        for ($i = 0; $i < 10; $i++) {
            Cliente::create([
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
                'tipo_cliente' => 'Tipo ' . $i,
            ]);
        }
    }
}

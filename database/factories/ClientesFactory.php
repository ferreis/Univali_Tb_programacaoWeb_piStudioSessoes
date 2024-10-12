<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'razao_social' => $this->faker->unique()->name(),
            'nome_fantasia' => $this->faker->name(),
            'cnpj' => $this->faker->unique()->cnpj(),
            'email' => $this->faker->unique()->email(),
            'telefone' => $this->faker->unique()->phoneNumber(),
            'endereco' => $this->faker->address(),
            'cidade' => $this->faker->city(),
            'estado' => $this->faker->state(),
            'cep' => $this->faker->postcode(),
            'pais' => $this->faker->country(),
            'ultima_sessao' => $this->faker->date(),
            'prox_sessao' => $this->faker->date(),
            'tipo_cliente' => $this->faker->word(),
        ];
    }
}

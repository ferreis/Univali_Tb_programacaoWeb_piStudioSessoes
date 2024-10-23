<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('tipo_clientes');

        Schema::create('tipo_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('razao_social')->unique();
            $table->string('nome_fantasia')->nullable();
            $table->boolean('matriz')->default(false);
            $table->string('cnpj')->unique();
            $table->string('email')->unique();
            $table->string('telefone')->unique()->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('abrev_estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('pais')->nullable();
            $table->date('ultima_sessao')->nullable();
            $table->date('prox_sessao')->nullable();
            $table->unsignedBigInteger('tipo_cliente_id')->nullable();
            $table->foreign('tipo_cliente_id')->references('id')->on('tipo_clientes');
            $table->timestamps();
        });

        DB::table('tipo_clientes')->insert([
            ['nome' => 'Tipo 1'],
            ['nome' => 'Tipo 2'],
            ['nome' => 'Tipo 3'],
            ['nome' => 'Tipo 4'],
            ['nome' => 'Tipo 5'],
            ['nome' => 'Tipo 6'],
            ['nome' => 'Tipo 7'],
            ['nome' => 'Tipo 8'],
            ['nome' => 'Tipo 9'],
            ['nome' => 'Tipo 10'],
        ]);
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('tipo_clientes');
    }
};

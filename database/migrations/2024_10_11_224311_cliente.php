<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social')->unique(); // 'razao_social'
            $table->string('nome_fantasia')->nullable(); // 'name_fantasia'
            $table->string('cnpj')->unique();
            $table->string('email')->unique();
            $table->string('telefone')->unique()->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('pais')->nullable();
            $table->date('ultima_sessao')->nullable();
            $table->date('prox_sessao')->nullable();
            $table->string('tipo_cliente');
            $table->timestamps();
        });   
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

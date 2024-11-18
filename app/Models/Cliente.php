<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [ 'nome', 'razao_social', 'nome_fantasia', 'cnpj', 'email', 'telefone', 'endereco', 'cidade', 'estado', 'cep', 'pais', 'ultima_sessao', 'prox_sessao', 'tipo_cliente_id', ];
}

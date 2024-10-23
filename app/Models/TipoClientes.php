<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoClientes extends Model
{
    use HasFactory;
    protected $table = 'tipo_clientes';
    protected $fillable = ['tipo'];

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
}

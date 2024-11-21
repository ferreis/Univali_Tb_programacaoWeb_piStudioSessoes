<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\TipoClientes;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }
    public function create()
    {
        $tipo = TipoClientes::all();

        return view('cliente.create' , compact('tipo'));
    }
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            Cliente::create([
            'razao_social' => $request->razao_social,
            'nome_fantasia' => $request->nome_fantasia,
            'cnpj' => $request->cnpj,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
            'pais' => $request->pais,
            'prox_sessao' => $request->prox_sessao,
            'tipo_cliente' => $request->tipo,
            ]);
        });

        return redirect()->route('cliente.index');
    }
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('cliente'));
    }
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->razao_social = $request->razao_social;
        $cliente->nome_fantasia = $request->nome_fantasia;
        $cliente->cnpj = $request->cnpj;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->endereco = $request->endereco;
        $cliente->cidade = $request->cidade;
        $cliente->estado = $request->estado;
        $cliente->cep = $request->cep;
        $cliente->pais = $request->pais;
        $cliente->prox_sessao = $request->prox_sessao;
        $cliente->tipo_cliente = $request->tipo;
        $cliente->save();
        return Redirect::route('cliente.index');
    }
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}

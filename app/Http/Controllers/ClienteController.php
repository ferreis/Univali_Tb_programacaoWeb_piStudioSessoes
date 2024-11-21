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
        Cliente::create($request->all());
        return to_route('cliente.index');
    }
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('cliente'));
    }
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $tipo = TipoClientes::all();
        return view('cliente.edit', compact('cliente', 'tipo'));
    }
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return to_route('cliente.index');
    }
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}

<x-app-layout>
    <x-bladewind::card class="m-8">
        <a href="{{ route('cliente.create') }}">
        <x-bladewind::button icon="plus">Adicionar</x-bladewind::button>
        </a>
        <x-bladewind::table
        divider="thin">
        <x-slot name="header">
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ultima Sessão</th>
            <th>Proxima Sessão</th>
            <th>Ação</th>

        </x-slot>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->cnpj }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->ultima_sessao }}</td>
            <td>{{ $cliente->prox_sessao }}</td>
            <td>
                <a href="{{ route('cliente.show', $cliente->id) }}" class="text-blue-600 hover:text-blue-900">
                    <x-bladewind::icon name="eye"/>
                </a>
                <a href="{{ route('cliente.edit', $cliente->id) }}" class="text-green-600 hover:text-green-900">
                    <x-bladewind::icon name="pencil"/>
                </a>
            </td>
        </tr>
        @endforeach
        </x-bladewind::table>
    </x-bladewind::card>
</x-app-layout>

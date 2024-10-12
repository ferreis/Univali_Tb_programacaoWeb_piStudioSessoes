<x-app-layout>
    <x-bladewind::card class="m-16">
        <x-slot name="header">
            <h2 class="font-semibold text-gray-800 leading-tight m-2 p-8 text-2xl grid grid-cols-3">
                <div> Cliente:  {{ $cliente->nome_fantasia }} </div>
                <div> Razão Social: {{ $cliente->razao_social }} </div>
                <div> {{ $cliente->cnpj }} </div>
            </h2>
            <div name="contato" class="mx-2 px-8 text-xl">
                <div>Email: {{ $cliente->email }} </div>
                <div>Telefone: {{ $cliente->telefone }}</div>
            </div>
            <div name="endereco" class="mx-2 px-8 grid grid-cols-3 text-xl">
                <div><strong>Endereço:</strong> {{ $cliente->endereco }} </div>
                <div><strong>Bairro:</strong> {{ $cliente->bairro }} </div>
                <div><strong>Cidade:</strong> {{ $cliente->cidade }} </div>
                <div><strong>Estado:</strong> {{ $cliente->estado }} </div>
                <div><strong>CEP:</strong> {{ $cliente->cep }}</div>
            </div>
            <div name="sessao" class="mx-2 px-8 text-xl grid grid-cols-2">
                <div><strong>Ultima Sessão:</strong> {{ $cliente->ultima_sessao }} </div>
                <div><strong>Proxima Sessão:</strong> 
                    @if ($cliente->prox_sessao == NULL)
                        Não agendada
                    @else
                        {{ $cliente->prox_sessao }}                        
                    @endif
                 </div>
            </div>
        
        </x-slot>
        <div class="p-6 text-gray-900">
            <div class="flex items">
    </x-bladewind::card>
</x-app-layout>
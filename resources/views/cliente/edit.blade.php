<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight px-2">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>
    <x-bladewind::card class="mx-8 mt-8 grid">
        <form method="POST" action="{{ route('cliente.update', $cliente->id) }}">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-3 gap-x-4 gap-y-2">
                <x-bladewind::input name="razao_social" prefix="Razão Social" class="rounded-lg"
                    selected_value="{{ $cliente->razao_social }}" />
                <x-bladewind::input name="nome_fantasia" prefix="Nome Fantasia" class="rounded-lg"
                    selected_value="{{ $cliente->nome_fantasia }}" />
                <x-bladewind::input name="cnpj" prefix="CNPJ" class="rounded-lg" numeric="true"
                    selected_value="{{ $cliente->cnpj }}" />
                <x-bladewind::input name="telefone" prefix="Telefone" class="rounded-lg" type="tel" numeric="true"
                    selected_value="{{ $cliente->telefone }}" />
                <x-bladewind::input name="email" prefix="Email" class="rounded-lg" type="email"
                    selected_value="{{ $cliente->email }}" />
                <x-bladewind::input name="endereco" prefix="Endereço" class="rounded-lg"
                    selected_value="{{ $cliente->endereco }}" />
                <x-bladewind::input name="cidade" prefix="Cidade" class="rounded-lg"
                    selected_value="{{ $cliente->cidade }}" />
                <x-bladewind::input name="estado" prefix="Estado" class="rounded-lg"
                    selected_value="{{ $cliente->estado }}" />
                <x-bladewind::input name="cep" prefix="CEP" class="rounded-lg"
                    selected_value="{{ $cliente->cep }}" />
                <x-bladewind::input name="pais" prefix="Pais" class="rounded-lg"
                    selected_value="{{ $cliente->pais }}" />
                <x-bladewind::input name="prox_sessao" prefix="Proxima Sessão" class="rounded-lg" type="date"
                    selected_value="{{ $cliente->prox_sessao }}" />
                <div>
                    <!-- remover o radio button e adicionar um select -->
                    <strong>Tipo de cliente:</strong>
                    <div>
                        <x-bladewind::radio-button label="Semanal" name="tipo" value="semanal"
                            checked="{{ $cliente->tipo_cliente == 'semanal' ? 'true' : 'false' }}" />
                        <x-bladewind::radio-button label="Mensal" name="tipo" value="mensal"
                            checked="{{ $cliente->tipo_cliente == 'mensal' ? 'true' : 'false' }}" />
                        <x-bladewind::radio-button label="Por Sessão" name="tipo" value="porSessao"
                            checked="{{ $cliente->tipo_cliente == 'porSessao' ? 'true' : 'false' }}" />
                        <x-bladewind::radio-button label="Indefinido" name="tipo" value="indefinido"
                            checked="{{ $cliente->tipo_cliente == 'indefinido' ? 'true' : 'false' }}" />
                    </div>
                </div>
            </div>
            <div class="flex flex-row-reverse ">

                <x-bladewind::button uppercasing="true" can_submit="true"> Salvar </x-bladewind::button>
        </form>
                <div class="flex mx-4">
                    <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <x-bladewind::button can_submit="true" uppercasing="true" name="trash" color="red">Excluir
                        </x-bladewind::button>
                    </form>
                </div>
            </div>

    </x-bladewind::card>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
            {{ __("Editando o $cliente->nome") }}
    </x-slot>
    <x-bladewind::card class="mx-8 mt-8 grid">
        <form method="POST" action="{{ route('cliente.update', $cliente->id) }}">
            @csrf
            @method('PUT')
                    <!-- Informações Básicas -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Informações Básicas</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <x-bladewind::input name="nome" label="Nome" required="true"
                            error="{{ $errors->first('nome') }}"
                                selected_value="{{ old('nome', $cliente->nome) }}" />
                            <x-bladewind::input name="razao_social" label="Razão Social" required="true"
                                error="{{ $errors->first('razao_social') }}"
                                selected_value="{{ old('razao_social', $cliente->razao_social) }}" />

                            <x-bladewind::input name="nome_fantasia" label="Nome Fantasia" required="true"
                                error="{{ $errors->first('nome_fantasia') }}"
                                selected_value="{{ old('nome_fantasia', $cliente->nome_fantasia) }}" />

                            <x-bladewind::input name="cnpj" label="CNPJ" required="true" numeric="true"
                                placeholder="00.000.000/0000-00" error="{{ $errors->first('cnpj') }}"
                                selected_value="{{ old('cnpj', $cliente->cnpj) }}" />
                        </div>
                    </div>

                    <!-- Contato -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Informações de Contato</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <x-bladewind::input name="telefone" label="Telefone" type="tel" required="true"
                                placeholder="(00) 00000-0000" error="{{ $errors->first('telefone') }}"
                                selected_value="{{ old('telefone', $cliente->telefone) }}" />

                            <x-bladewind::input name="email" label="Email" type="email" required="true"
                                error="{{ $errors->first('email') }}"
                                selected_value="{{ old('email', $cliente->email) }}" />
                        </div>
                    </div>

                    <!-- Endereço -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Endereço</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <x-bladewind::input name="cep" label="CEP" required="true" placeholder="00000-000"
                                error="{{ $errors->first('cep') }}"
                                selected_value="{{ old('cep', $cliente->cep) }}" />

                            <x-bladewind::input name="endereco" label="Endereço" required="true"
                                error="{{ $errors->first('endereco') }}"
                                selected_value="{{ old('endereco', $cliente->endereco) }}" />

                            <x-bladewind::input name="cidade" label="Cidade" required="true"
                                error="{{ $errors->first('cidade') }}"
                                selected_value="{{ old('cidade', $cliente->cidade) }}" />

                            <x-bladewind::input name="estado" label="Estado" required="true"
                                error="{{ $errors->first('estado') }}"
                                selected_value="{{ old('estado', $cliente->estado) }}" />

                            <x-bladewind::input name="pais" label="País" required="true"
                                error="{{ $errors->first('pais') }}"
                                selected_value="{{ old('pais', $cliente->pais) }}" />
                        </div>
                    </div>

                    <!-- Informações Adicionais -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Informações Adicionais</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <x-bladewind::input name="prox_sessao" label="Próxima Sessão" type="date"
                                error="{{ $errors->first('prox_sessao') }}"
                                selected_value="{{ old('prox_sessao', $cliente->prox_sessao) }}" />

                            <div class="space-y-2">
                                <x-bladewind::select name="tipo" label="Tipo de Cliente" value_key="id"
                                    label_key="nome" :data="$tipo" required="true"
                                    selected_value="{{ old('tipo', $cliente->tipo_cliente_id) }}" />
                            </div>

                            <div class="space-y-2">
                                <label for="contrato" class="block text-sm font-medium text-gray-700">Contrato</label>
                                <div class="flex space-x-4">
                                    <x-bladewind::radio-button label="Com contrato" name="contrato" value="1"
                                        checked="{{ old('contrato', $cliente->contrato) == 1 }}" />
                                    <x-bladewind::radio-button label="Sem contrato" name="contrato" value="0"
                                        checked="{{ old('contrato', $cliente->contrato) == 0 }}" />
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight px-2">
            {{ __('Adicionar Cliente') }}
        </h2>
        </x-slot>
        <x-bladewind::card class="mx-8 mt-8 grid p-8">
            <form method="POST" action="{{ route("cliente.store") }}">
                @csrf
                <div class="grid grid-cols-3 gap-x-4 gap-y-2">
                    <x-bladewind::input
                    name="nome"
                    prefix="Nome"
                    class="rounded-lg"
                    />
                    <x-bladewind::input
                    name="razao_social"
                    prefix="Razão Social"
                    class="rounded-lg"
                    />
                    <x-bladewind::input
                    name="nome_fantasia"
                    prefix="Nome Fantasia"
                    class="rounded-lg"
                    />
                    <x-bladewind::input
                    name="cnpj"
                    prefix="CNPJ"
                    class="rounded-lg"
                    numeric="true"
                    />
                    <x-bladewind::input
                    name="telefone"
                    prefix="Telefone"
                    class="rounded-lg"
                    type="tel"
                    numeric="true"
                    />
                    <x-bladewind::input
                    name="email"
                    prefix="Email"
                    class="rounded-lg"
                    type="email"
                    />
                    <x-bladewind::input
                    name="endereco"
                    prefix="Endereço"
                    class="rounded-lg"
                    />
                    <x-bladewind::input
                    name="cidade"
                    prefix="Cidade"
                    class="rounded-lg"
                    />
                    <x-bladewind::input
                    name="estado"
                    prefix="Estado"
                    class="rounded-lg"
                    />
                    <x-bladewind::input
                    name="cep"
                    prefix="CEP"
                    class="rounded-lg"
                    />
                    <x-bladewind::input
                    name="pais"
                    prefix="Pais"
                    class="rounded-lg"
                    />
                    <x-bladewind::input
                    name="prox_sessao"
                    prefix="Proxima Sessão"
                    class="rounded-lg"
                    type="date"
                    />
                    <x-bladewind::select
                    name="tipo"
                    value_key="id"
                    label_key="nome"
                    :data="$tipo" />
                    <div>
                    <storng>Contrato:</storng>
                        <div>
                            <x-bladewind::radio-button label="Com contrato" name="contrato"  value="com"/>
                            <x-bladewind::radio-button label="Sem contrato" name="contrato"  value="sem"/>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <x-bladewind::button uppercasing="true"  can_submit="true"> Salvar </x-bladewind::button>
                </div>
            </form>
        </x-bladewind::card>
</x-app-layout>

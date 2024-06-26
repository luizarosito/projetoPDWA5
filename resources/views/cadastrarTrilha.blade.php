<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar trilha') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Aqui nós cadastramos trilhas!") }}
                    <form action="/cadastrarTrilha" method="post">
                        @csrf <!-- token de form -->

                        <!-- Data saida -->
                        <div>
                            <x-input-label for="data_saida" :value="__('Data saida')" />
                            <x-text-input id="data_saida" class="block mt-1 w-full" type="date" name="data_saida" :value="old('data_saida')" required autofocus autocomplete="data_saida" />
                            <x-input-error :messages="$errors->get('data_saida')" class="mt-2" />
                        </div>
    
                        <!-- Data retorno -->
                        <div class="mt-4">
                            <x-input-label for="data_retorno" :value="__('Data retorno')" />
                            <x-text-input id="data_retorno" class="block mt-1 w-full" type="date" name="data_retorno" :value="old('data_retorno')" required autocomplete="data_retorno" />
                            <x-input-error :messages="$errors->get('data_retorno')" class="mt-2" />
                        </div>
    
                        <!-- Preço -->
                        <div class="mt-4">
                            <x-input-label for="preço" :value="__('Preço:')" />
                            <x-text-input id="preço" class="block mt-1 w-full" type="number" name="preço" :value="old('preço')" required autocomplete="preço" />
                            <x-input-error :messages="$errors->get('preço')" class="mt-2" />
                        </div>
    
                        <!-- Descrição -->
                        <div class="mt-4">
                            <x-input-label for="descrição" :value="__('Descrição da trilha (até 100 caracteres)')" />
                            <x-text-input id="descrição" class="block mt-1 w-full" type="string" name="descrição" :value="old('descrição')" maxlength="100" required autocomplete="descrição" />
                            <x-input-error :messages="$errors->get('descrição')" class="mt-2" />
                        </div>
    
                        <!-- Status -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status:')" />
                            <input id="statusTrue" type="radio" name="status" value="1" {{ old('booleano') == '1' ? 'checked' : '' }}>Ativo</input>
                            <input id="statusFalse" type="radio" name="status" value="0" {{ old('booleano') == '0' ? 'checked' : '' }}>Inativo</input>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

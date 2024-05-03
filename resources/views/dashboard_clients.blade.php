<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard dels usuaris tipus cap_de_departament') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('trebs') }}">Treballadors: Visualitza, actualitza i esborra registres<a />
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('trebs/create') }}">Treballadors: Crea un nou treballador<a />
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('register') }}">Crea un nou usuari</a><br>
                </div>
            </div>
        </div>
</x-app-layout>
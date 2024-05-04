<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard dels usuaris tipus bàsic') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('trebs/index_basic') }}">Treballadors:
                        Visualització bàsica<a />
                </div> --}}
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('clients') }}">Clients:
                        Visualitza, actualitza i esborra registres<a />
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('clients/create') }}">Crea un nou Client<a />
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('apart') }}">Apartament: Visualitza, actualitza i esborra registres<a />
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('apart/create') }}">Apartament: Crea un nou Apartament<a />
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('lloga') }}">Lloga: Visualitza, actualitza i esborra registres<a />
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('lloga/create') }}">Lloga: Crea un nou Apartament<a />
                </div>
            </div>
        </div>
    </div>
    <div class ="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
    </div>
</x-app-layout>

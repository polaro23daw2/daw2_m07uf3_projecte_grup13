<x-app-layout>
@extends('disseny')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Afegeix un nou Client
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1>Afegeix un nou Client</h1>
            <form method="POST" action="/clients">
                @csrf
                <div class="form-group">
                    <label for="dni_client">DNI:</label>
                    <input type="text" name="dni_client" required>
                </div>
                <div class="form-group">
                    <label for="nom_i_cognoms">Nombre y Apellidos:</label>
                    <input type="text" name="nom_i_cognoms" required>
                </div>
                <div class="form-group">
                    <label for="edat">Edad:</label>
                    <input type="number" name="edat" required>
                </div>
                <div class="form-group">
                    <label for="telefon">Teléfono:</label>
                    <input type="text" name="telefon" required>
                </div>
                <div class="form-group">
                    <label for="adreca">Dirección:</label>
                    <input type="text" name="adreca" required>
                </div>
                <div class="form-group">
                    <label for="ciutat">Ciudad:</label>
                    <input type="text" name="ciutat" required>
                </div>
                <div class="form-group">
                    <label for="pais">País:</label>
                    <input type="text" name="pais" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="tipus_de_targeta">Tipo de Tarjeta:</label>
                    <select name="tipus_de_targeta">
                        <option value="Dèbit">Débito</option>
                        <option value="Crèdit">Crédito</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numero_de_la_targeta">Número de Tarjeta:</label>
                    <input type="text" name="numero_de_la_targeta" required>
                </div>
                <button type="submit">Guardar Cliente</button>
            </form>
        </div>
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard<a />
    </div>
</x-app-layout>

@endsection

@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualización de datos del Cliente
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
        <form method="post" action="{{ route('clients.update', $dades_client->dni_client) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="dni_client">DNI del Cliente:</label>
                <input type="text" class="form-control" name="dni_client" value="{{ $dades_client->dni_client }}" required>
            </div>
            <div class="form-group">
                <label for="nom_i_cognoms">Nombre y Apellidos:</label>
                <input type="text" class="form-control" name="nom_i_cognoms" value="{{ $dades_client->nom_i_cognoms }}" required>
            </div>
            <div class="form-group">
                <label for="edat">Edad:</label>
                <input type="number" class="form-control" name="edat" value="{{ $dades_client->edat }}" required>
            </div>
            <div class="form-group">
                <label for="telefon">Teléfono:</label>
                <input type="text" class="form-control" name="telefon" value="{{ $dades_client->telefon }}" required>
            </div>
            <div class="form-group">
                <label for="adreca">Dirección:</label>
                <input type="text" class="form-control" name="adreca" value="{{ $dades_client->adreca }}" required>
            </div>
            <div class="form-group">
                <label for="ciutat">Ciudad:</label>
                <input type="text" class="form-control" name="ciutat" value="{{ $dades_client->ciutat }}" required>
            </div>
            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" class="form-control" name="pais" value="{{ $dades_client->pais }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $dades_client->email }}" required>
            </div>
            <div class="form-group">
                <label for="tipus_de_targeta">Tipo de Tarjeta:</label>
                <select name="tipus_de_targeta" class="form-control">
                    <option value="Dèbit" {{ $dades_client->tipus_de_targeta == 'Dèbit' ? 'selected' : '' }}>Débito</option>
                    <option value="Crèdit" {{ $dades_client->tipus_de_targeta == 'Crèdit' ? 'selected' : '' }}>Crédito</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numero_de_la_targeta">Número de la Tarjeta:</label>
                <input type="text" class="form-control" name="numero_de_la_targeta" value="{{ $dades_client->numero_de_la_targeta }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
        </form>
    </div>
</div>
@endsection

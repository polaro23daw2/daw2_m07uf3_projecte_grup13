@extends('disseny')

@section('content')
    <h1>Llista de clients</h1>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <td>DNI del Cliente</td>
                    <td>Nombre y Apellidos</td>
                    <td>Edad</td>
                    <td>Teléfono</td>
                    <td>Dirección</td>
                    <td>Ciudad</td>
                    <td>País</td>
                    <td>Email</td>
                    <td>Tipo de Tarjeta</td>
                    <td>Número de la Tarjeta</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($dades_clients as $client)
                    <tr>
                        <td>{{ $client->dni_client }}</td>
                        <td>{{ $client->nom_i_cognoms }}</td>
                        <td>{{ $client->edat }}</td>
                        <td>{{ $client->telefon }}</td>
                        <td>{{ $client->adreca }}</td>
                        <td>{{ $client->ciutat }}</td>
                        <td>{{ $client->pais }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->tipus_de_targeta }}</td>
                        <td>{{ $client->numero_de_la_targeta }}</td>
                        <td class="text-left">
                            <a href="{{ route('clients.edit', $client->dni_client) }}" class="btn btn-primary btn-sm">Edita</a>
                            <form action="{{ route('clients.destroy', $client->dni_client) }}" method="post"style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Esborra</button>
                            </form>
                            <a href="{{ route('clients.show', $client->dni_client) }}" class="btn btn-info btn-sm">Mostra</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('dashboard-basic') }}">Torna al dashboard dels Clients</a>
        </div>
    </div>
@endsection

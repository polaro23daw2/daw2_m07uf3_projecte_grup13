    @extends('disseny')
    @section('content')
        <h1>Datos del Cliente</h1>
        <div class="mt-5">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr class="table-primary">
                        <th scope="col">CAMPO</th>
                        <th scope="col">VALOR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DNI del Cliente</td>
                        <td>{{ $dades_client->dni_client }}</td>
                    </tr>
                    <tr>
                        <td>Nombre y Apellidos</td>
                        <td>{{ $dades_client->nom_i_cognoms }}</td>
                    </tr>
                    <tr>
                        <td>Edad</td>
                        <td>{{ $dades_client->edat }}</td>
                    </tr>
                    <tr>
                        <td>Teléfono</td>
                        <td>{{ $dades_client->telefon }}</td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td>{{ $dades_client->adreca }}</td>
                    </tr>
                    <tr>
                        <td>Ciudad</td>
                        <td>{{ $dades_client->ciutat }}</td>
                    </tr>
                    <tr>
                        <td>País</td>
                        <td>{{ $dades_client->pais }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $dades_client->email }}</td>
                    </tr>
                    <tr>
                        <td>Tipo de Tarjeta</td>
                        <td>{{ $dades_client->tipus_de_targeta }}</td>
                    </tr>
                    <tr>
                        <td>Número de la Tarjeta</td>
                        <td>{{ $dades_client->numero_de_la_targeta }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ url('dashboard-basic') }}">Volver al dashboard</a>
            </div>

            <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ url('clients') }}">Volver a la lista de clientes</a>
            </div>
		</div>
@endsection

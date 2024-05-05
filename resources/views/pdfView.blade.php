<x-app-layout>
<!DOCTYPE html>
<html>

<head>
    <title>Llista de Clients</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 10px;
            /* Ajustar según necesidad */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
        }

        .table-primary {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <h1>Llista de Clients</h1>
    <table>
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
            </tr>
        </thead>
        <tbody>
            @if (isset($client))
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
                </tr>
            @else
                @foreach ($clients as $client)
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
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard dels Clients</a>
    </div>
</body>

</html>
</x-app-layout>


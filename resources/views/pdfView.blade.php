<!DOCTYPE html>
<html>
<head>
    <title>Llista de Clients</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
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
        </tbody>
    </table>
</body>
</html>

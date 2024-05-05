<!DOCTYPE html>
<html>

<head>
    <title>Llista d'Apartaments</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
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
    <h1>Llista d'Apartaments</h1>
    <table>
        <thead>
            <tr class="table-primary">
                <td>Codi Únic</td>
                <td>Referència Catastral</td>
                <td>Ciutat</td>
                <td>Barri</td>
                <td>Nom del Carrer</td>
                <td>Número del Carrer</td>
                <td>Pis</td>
                <td>Nombre de Llits</td>
                <td>Nombre d'Habitacions</td>
                <td>Ascensor</td>
                <td>Calefacció</td>
                <td>Aire Condicionat</td>
            </tr>
        </thead>
        <tbody>
            @if (isset($apartament))
                <tr>
                    <td>{{ $apartament->codi_unic }}</td>
                    <td>{{ $apartament->referencia_catastral }}</td>
                    <td>{{ $apartament->ciutat }}</td>
                    <td>{{ $apartament->barri }}</td>
                    <td>{{ $apartament->nom_del_carrer }}</td>
                    <td>{{ $apartament->numero_del_carrer }}</td>
                    <td>{{ $apartament->pis }}</td>
                    <td>{{ $apartament->nombre_de_llits }}</td>
                    <td>{{ $apartament->nombre_dhabitacions }}</td>
                    <td>{{ $apartament->ascensor ? 'Sí' : 'No' }}</td>
                    <td>{{ $apartament->calefaccio }}</td>
                    <td>{{ $apartament->aire_condicionat ? 'Sí' : 'No' }}</td>
                </tr>
            @else
                @foreach ($apartaments as $apartament)
                    <tr>
                        <td>{{ $apartament->codi_unic }}</td>
                        <td>{{ $apartament->referencia_catastral }}</td>
                        <td>{{ $apartament->ciutat }}</td>
                        <td>{{ $apartament->barri }}</td>
                        <td>{{ $apartament->nom_del_carrer }}</td>
                        <td>{{ $apartament->numero_del_carrer }}</td>
                        <td>{{ $apartament->pis }}</td>
                        <td>{{ $apartament->nombre_de_llits }}</td>
                        <td>{{ $apartament->nombre_dhabitacions }}</td>
                        <td>{{ $apartament->ascensor ? 'Sí' : 'No' }}</td>
                        <td>{{ $apartament->calefaccio }}</td>
                        <td>{{ $apartament->aire_condicionat ? 'Sí' : 'No' }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard dels Clients<a />
    </div>
</body>

</html>

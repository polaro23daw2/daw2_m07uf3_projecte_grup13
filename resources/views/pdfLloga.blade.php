<x-app-layout>
<!DOCTYPE html>
<html>

<head>
    <title>Llista de Lloguers</title>
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
    <h1>Llista de Lloguers</h1>
    <table>
        <thead>
            <tr class="table-primary">
                <td>DNI del Cliente</td>
                <td>Codi unic de l'apartament</td>
                <td>Data inici lloguer</td>
                <td>Hora inici lloguer</td>
                <td>Data final lloguer</td>
                <td>Hora final lloguer</td>
                <td>Lloc lliurament claus</td>
                <td>Lloc devolució claus</td>
                <td>Preu x dia</td>
                <td>Diposit</td>
                <td>Quantitat diposits</td>
                <td>Tipus d'asseguranca</td>
            </tr>
        </thead>
        <tbody>
            @if (isset($lloga))
                <tr>

                
                    <td>{{ $lloga->dni_client }}</td>
                    <td>{{ $lloga->codi_unic }}</td>
                    <td>{{ $lloga->data_inici_lloguer }}</td>
                    <td>{{ $lloga->hora_inici_lloguer }}</td>
                    <td>{{ $lloga->data_finalitzacio_lloguer }}</td>
                    <td>{{ $lloga->hora_finalitzacio_lloguer }}</td>
                    <td>{{ $lloga->lloc_lliurament_claus }}</td>
                    <td>{{ $lloga->lloc_devolucio_claus }}</td>
                    <td>{{ $lloga->preu_per_dia }}</td>
                    <td>{{ $lloga->diposit }}</td>
                    <td>{{ $lloga->quantitat_diposit }}</td>
                    <td>{{ $lloga->tipus_asseguranca }}</td>
                </tr>
            @else
                @foreach ($llogas as $lloga)
                    <tr>
                        <td>{{ $lloga->dni_client }}</td>
                        <td>{{ $lloga->codi_unic }}</td>
                        <td>{{ $lloga->data_inici_lloguer }}</td>
                        <td>{{ $lloga->hora_inici_lloguer }}</td>
                        <td>{{ $lloga->data_finalitzacio_lloguer }}</td>
                        <td>{{ $lloga->hora_finalitzacio_lloguer }}</td>
                        <td>{{ $lloga->lloc_lliurament_claus }}</td>
                        <td>{{ $lloga->lloc_devolucio_claus }}</td>
                        <td>{{ $lloga->preu_per_dia }}</td>
                        <td>{{ $lloga->diposit }}</td>
                        <td>{{ $lloga->quantitat_diposit }}</td>
                        <td>{{ $lloga->tipus_asseguranca }}</td>
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
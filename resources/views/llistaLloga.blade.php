@extends('disseny')
@section('content')
    <h1>Llista de Lloguers</h1>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <td>DNI del Cliente</td>
                    <td>Nombre y Apellidos</td>
                    <td>Código Único del Apartamento</td>
                    <td>Fecha de Inicio</td>
                    <td>Hora de Inicio</td>
                    <td>Fecha de Finalización</td>
                    <td>Hora de Finalización</td>
                    <td>Lugar de Entrega de Llaves</td>
                    <td>Lugar de Devolución de Llaves</td>
                    <td>Precio por Día</td>
                    <td>Depósito</td>
                    <td>Cantidad de Depósito</td>
                    <td>Tipo de Seguro</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($dades_lloga as $lloga)
                    <tr>
                        <td>{{ $lloga->dni_client }}</td>
                        <td>{{ $lloga->client->nom_i_cognoms }}</td>
                        <td>{{ $lloga->codi_unic }}</td>
                        <td>{{ $lloga->data_inici_lloguer }}</td>
                        <td>{{ $lloga->hora_inici_lloguer }}</td>
                        <td>{{ $lloga->data_finalitzacio_lloguer }}</td>
                        <td>{{ $lloga->hora_finalitzacio_lloguer }}</td>
                        <td>{{ $lloga->lloc_lliurament_claus }}</td>
                        <td>{{ $lloga->lloc_devolucio_claus }}</td>
                        <td>{{ $lloga->preu_per_dia }}</td>
                        <td>{{ $lloga->diposit ? 'Sí' : 'No' }}</td>
                        <td>{{ $lloga->quantitat_diposit }}</td>
                        <td>{{ $lloga->tipus_asseguranca }}</td>
                         <td class="text-left">
                            <a href="{{ route('lloga.edit', ['dni_client' => $lloga->dni_client, 'codi_unic' => $lloga->codi_unic]) }}" class="btn btn-primary btn-sm">Edita</a>
                            <form action="{{ route('lloga.destroy', ['dni_client' => $lloga->dni_client, 'codi_unic' => $lloga->codi_unic]) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Esborra</button>
                            </form>
                            <a href="{{ route('lloga.show', ['dni_client' => $lloga->dni_client, 'codi_unic' => $lloga->codi_unic]) }}" class="btn btn-info btn-sm">Mostra</a>
                            <div class="p-6 bg-white border-b border-gray-200">
                                <a href="{{ route('pdf.lloga', ['dni_client' => $lloga->dni_client, 'codi_unic' =>$lloga->codi_unic]) }}">hacer pdf</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('dashboard-basic') }}">Torna al dashboard dels Lloguers</a>
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('/pdf/Lloguers') }}">Fer PDF</a>
        </div>
    </div>
@endsection

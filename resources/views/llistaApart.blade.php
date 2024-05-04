@extends('disseny')
@section('content')
    <h1>Llista d'apartaments</h1>
    <div class="mt-5">
        <table class="table">
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
                @foreach ($dades_apartament as $apartament)
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
                        <td class="text-left">
                            <a href="{{ route('apart.edit', $apartament->codi_unic) }}"
                                class="btn btn-primary btn-sm">Edita</a>
                            <form action="{{ route('apart.destroy', $apartament->codi_unic) }}"
                                method="post"style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Esborra</button>
                            </form>
                            <a href="{{ route('apart.show', $apartament->codi_unic) }}"
                                class="btn btn-info btn-sm">Mostra</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ url('dashboard-basic') }}">Torna al dashboard<a />
            </div>
            <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ url('/pdf/apartaments') }}">hacer pdf</a>
            </div>
        @endsection

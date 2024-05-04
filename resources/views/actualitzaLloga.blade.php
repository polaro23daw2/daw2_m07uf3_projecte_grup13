@extends('disseny')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Edita Lloguer
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

            <form method="POST" action="{{ route('lloga.update', ['dni_client' => $dades_lloga->dni_client, 'codi_unic' => $dades_lloga->codi_unic]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="data_inici_lloguer">Fecha de Inicio:</label>
                    <input type="date" name="data_inici_lloguer" class="form-control" value="{{ $dades_lloga->data_inici_lloguer }}" required>
                </div>
                <div class="form-group">
                    <label for="hora_inici_lloguer">Hora de Inicio:</label>
                    <input type="time" name="hora_inici_lloguer" class="form-control" value="{{ $dades_lloga->hora_inici_lloguer }}" required>
                </div>
                <div class="form-group">
                    <label for="data_finalitzacio_lloguer">Fecha de Finalización:</label>
                    <input type="date" name="data_finalitzacio_lloguer" class="form-control" value="{{ $dades_lloga->data_finalitzacio_lloguer }}" required>
                </div>
                <div class="form-group">
                    <label for="hora_finalitzacio_lloguer">Hora de Finalización:</label>
                    <input type="time" name="hora_finalitzacio_lloguer" class="form-control" value="{{ $dades_lloga->hora_finalitzacio_lloguer }}" required>
                </div>
                <div class="form-group">
                    <label for="lloc_lliurament_claus">Lugar de Entrega de Llaves:</label>
                    <input type="text" name="lloc_lliurament_claus" class="form-control" value="{{ $dades_lloga->lloc_lliurament_claus }}" required>
                </div>
                <div class="form-group">
                    <label for="lloc_devolucio_claus">Lugar de Devolución de Llaves:</label>
                    <input type="text" name="lloc_devolucio_claus" class="form-control" value="{{ $dades_lloga->lloc_devolucio_claus }}" required>
                </div>
                <div class="form-group">
                    <label for="preu_per_dia">Precio por Día:</label>
                    <input type="number" name="preu_per_dia" class="form-control" value="{{ $dades_lloga->preu_per_dia }}" required>
                </div>
                <div class="form-group">
                    <label for="diposit">Depósito:</label>
                    <select name="diposit" class="form-control" required>
                        <option value="1" {{ $dades_lloga->diposit ? 'selected' : '' }}>Sí</option>
                        <option value="0" {{ !$dades_lloga->diposit ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantitat_diposit">Cantidad de Depósito:</label>
                    <input type="number" step="0.01" name="quantitat_diposit" class="form-control" value="{{ $dades_lloga->quantitat_diposit }}" required>
                </div>
                <div class="form-group">
                    <label for="tipus_asseguranca">Tipo de Seguro:</label>
                    <select name="tipus_asseguranca" class="form-control" required>
                        <option value="Franquícia fins a 1000 Euros" {{ $dades_lloga->tipus_asseguranca == 'Franquícia fins a 1000 Euros' ? 'selected' : '' }}>Franquícia fins a 1000 Euros</option>
                        <option value="Franquícia fins a 500 Euros" {{ $dades_lloga->tipus_asseguranca == 'Franquícia fins a 500 Euros' ? 'selected' : '' }}>Franquícia fins a 500 Euros</option>
                        <option value="Sense franquícia" {{ $dades_lloga->tipus_asseguranca == 'Sense franquícia' ? 'selected' : '' }}>Sense franquícia</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            </form>
        </div>
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    </div>
@endsection
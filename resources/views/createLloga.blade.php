<x-app-layout>
@extends('disseny')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Afegeix un nou Lloguer
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

            <form method="POST" action="/lloga">
                @csrf
                <div class="form-group">
                    <label for="dni_client">DNI del Cliente:</label>
                    <input type="text" name="dni_client" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="codi_unic">Código Único del Apartamento:</label>
                    <input type="text" name="codi_unic" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="data_inici_lloguer">Fecha de Inicio:</label>
                    <input type="date" name="data_inici_lloguer" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="hora_inici_lloguer">Hora de Inicio:</label>
                    <input type="time" name="hora_inici_lloguer" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="data_finalitzacio_lloguer">Fecha de Finalización:</label>
                    <input type="date" name="data_finalitzacio_lloguer" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="hora_finalitzacio_lloguer">Hora de Finalización:</label>
                    <input type="time" name="hora_finalitzacio_lloguer" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lloc_lliurament_claus">Lugar de Entrega de Llaves:</label>
                    <input type="text" name="lloc_lliurament_claus" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lloc_devolucio_claus">Lugar de Devolución de Llaves:</label>
                    <input type="text" name="lloc_devolucio_claus" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="preu_per_dia">Precio por Día:</label>
                    <input type="number" name="preu_per_dia" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="diposit">Depósito:</label>
                    <select name="diposit" class="form-control" required>
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantitat_diposit">Cantidad de Depósito:</label>
                    <input type="number" step="0.01" name="quantitat_diposit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tipus_asseguranca">Tipo de Seguro:</label>
                    <select name="tipus_asseguranca" class="form-control" required>
                        <option value="Franquícia fins a 1000 Euros">Franquícia fins a 1000 Euros</option>
                        <option value="Franquícia fins a 500 Euros">Franquícia fins a 500 Euros</option>
                        <option value="Sense franquícia">Sense franquícia</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Lloguer</button>
            </form>
        </div>
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    </div>
</x-app-layout>

@endsection

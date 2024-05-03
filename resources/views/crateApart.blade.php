@extends('disseny')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Afegeix un nou apartament
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
            <form method="post" action="/apart">
                @csrf
                <div class="form-group">
                    <label for="codi_unic">Codi Únic</label>
                    <input type="text" class="form-control" name="codi_unic" maxlength="7" required />
                </div>
                <div class="form-group">
                    <label for="referencia_catastral">Referència Catastral</label>
                    <input type="text" class="form-control" name="referencia_catastral" required />
                </div>
                <div class="form-group">
                    <label for="ciutat">Ciutat</label>
                    <input type="text" class="form-control" name="ciutat" required />
                </div>
                <div class="form-group">
                    <label for="barri">Barri</label>
                    <input type="text" class="form-control" name="barri" required />
                </div>
                <div class="form-group">
                    <label for="nom_del_carrer">Nom del Carrer</label>
                    <input type="text" class="form-control" name="nom_del_carrer" required />
                </div>
                <div class="form-group">
                    <label for="numero_del_carrer">Número del Carrer</label>
                    <input type="number" class="form-control" name="numero_del_carrer" required />
                </div>
                <div class="form-group">
                    <label for="pis">Pis</label>
                    <input type="number" class="form-control" name="pis" required />
                </div>
                <div class="form-group">
                    <label for="nombre_de_llits">Nombre de Llits</label>
                    <input type="number" class="form-control" name="nombre_de_llits" required />
                </div>
                <div class="form-group">
                    <label for="nombre_dhabitacions">Nombre d'Habitacions</label>
                    <input type="number" class="form-control" name="nombre_dhabitacions" required />
                </div>
                <div class="form-group">
                    <label for="ascensor">Ascensor</label>
                    <select class="form-control" name="ascensor">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="calefaccio">Calefacció</label>
                    <select class="form-control" name="calefaccio">
                        <option value="Elèctrica">Elèctrica</option>
                        <option value="Gas Natural">Gas Natural</option>
                        <option value="Butà">Butà</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="aire_condicionat">Aire Condicionat</label>
                    <select class="form-control" name="aire_condicionat">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Envia</button>
            </form>
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('dashboard-basic') }}">Torna al dashboard<a />
        </div>
    </div>
@endsection

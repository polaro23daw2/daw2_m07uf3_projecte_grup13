@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades del apartament
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
        <form method="post" action="{{ route('apart.update', $dades_apartament->codi_unic) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">
				<label for="codi_unic">Codi Únic</label>
				<input type="text" class="form-control" name="codi_unic" value="{{ $dades_apartament->codi_unic }}" readonly/>
			</div>
			<div class="form-group">
				<label for="referencia_catastral">Referència Catastral</label>
				<input type="text" class="form-control" name="referencia_catastral" value="{{ $dades_apartament->referencia_catastral }}"/>
			</div>
			<div class="form-group">
				<label for="ciutat">Ciutat</label>
				<input type="text" class="form-control" name="ciutat" value="{{ $dades_apartament->ciutat }}"/>
			</div>
			<div class="form-group">
				<label for="barri">Barri</label>
				<input type="text" class="form-control" name="barri" value="{{ $dades_apartament->barri }}"/>
			</div>
			<div class="form-group">
				<label for="nom_del_carrer">Nom del Carrer</label>
				<input type="text" class="form-control" name="nom_del_carrer" value="{{ $dades_apartament->nom_del_carrer }}"/>
			</div>
			<div class="form-group">
				<label for="numero_del_carrer">Número del Carrer</label>
				<input type="number" class="form-control" name="numero_del_carrer" value="{{ $dades_apartament->numero_del_carrer }}"/>
			</div>
			<div class="form-group">
				<label for="pis">Pis</label>
				<input type="number" class="form-control" name="pis" value="{{ $dades_apartament->pis }}"/>
			</div>
			<div class="form-group">
				<label for="nombre_de_llits">Nombre de Llits</label>
				<input type="number" class="form-control" name="nombre_de_llits" value="{{ $dades_apartament->nombre_de_llits }}"/>
			</div>
			<div class="form-group">
				<label for="nombre_dhabitacions">Nombre d'Habitacions</label>
				<input type="number" class="form-control" name="nombre_dhabitacions" value="{{ $dades_apartament->nombre_dhabitacions }}"/>
			</div>
			<div class="form-group">
				<label for="ascensor">Ascensor</label>
				<select class="form-control" name="ascensor">
					<option value="1" {{ $dades_apartament->ascensor == 1 ? 'selected' : ''}}>Sí</option>
					<option value="0" {{ $dades_apartament->ascensor == 0 ? 'selected' : ''}}>No</option>			    
				</select>
			</div>
			<div class="form-group">
				<label for="calefaccio">Calefacció</label>
				<select class="form-control" name="calefaccio">
					<option value="Elèctrica" {{ $dades_apartament->calefaccio == "Elèctrica" ? 'selected' : ''}}>Elèctrica</option>
					<option value="Gas Natural" {{ $dades_apartament->calefaccio == "Gas Natural" ? 'selected' : ''}}>Gas Natural</option>
					<option value="Butà" {{ $dades_apartament->calefaccio == "Butà" ? 'selected' : ''}}>Butà</option>
				</select>
			</div>
			<div class="form-group">
				<label for="aire_condicionat">Aire Condicionat</label>
				<select class="form-control" name="aire_condicionat">
					<option value="1" {{ $dades_apartament->aire_condicionat == 1 ? 'selected' : ''}}>Sí</option>
					<option value="0" {{ $dades_apartament->aire_condicionat == 0 ? 'selected' : ''}}>No</option>			    
				</select>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('apartx') }}">Accés directe a la Llista d'apart
@endsection
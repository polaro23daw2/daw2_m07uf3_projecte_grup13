@extends('disseny')
@section('content')
<h1>Dades de l'dades_apartament</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
        <tr class="table-primary">
            <th scope="col">CAMP</th>
            <th scope="col">VALOR</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Codi Únic</td>
            <td>{{$dades_apartament->codi_unic}}</td>
        </tr>
        <tr>
            <td>Referència Catastral</td>
            <td>{{$dades_apartament->referencia_catastral}}</td>
        </tr>
        <tr>
            <td>Ciutat</td>
            <td>{{$dades_apartament->ciutat}}</td>
        </tr>
        <tr>
            <td>Barri</td>
            <td>{{$dades_apartament->barri}}</td>
        </tr>
        <tr>
            <td>Nom del Carrer</td>
            <td>{{$dades_apartament->nom_del_carrer}}</td>
        </tr>
        <tr>
            <td>Número del Carrer</td>
            <td>{{$dades_apartament->numero_del_carrer}}</td>
        </tr>
        <tr>
            <td>Pis</td>
            <td>{{$dades_apartament->pis}}</td>
        </tr>
        <tr>
            <td>Nombre de Llits</td>
            <td>{{$dades_apartament->nombre_de_llits}}</td>
        </tr>
        <tr>
            <td>Nombre d'Habitacions</td>
            <td>{{$dades_apartament->nombre_dhabitacions}}</td>
        </tr>
        <tr>
            <td>Ascensor</td>
            <td>{{$dades_apartament->ascensor ? 'Sí' : 'No'}}</td>
        </tr>
        <tr>
            <td>Calefacció</td>
            <td>{{$dades_apartament->calefaccio}}</td>
        </tr>
        <tr>
            <td>Aire Condicionat</td>
            <td>{{$dades_apartament->aire_condicionat ? 'Sí' : 'No'}}</td>
        </tr>
    </tbody>   
  </table>
  
  <div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>                     
  </div>

  <div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('apart') }}">Torna a la llista</a>
  </div>
<div>
@endsection

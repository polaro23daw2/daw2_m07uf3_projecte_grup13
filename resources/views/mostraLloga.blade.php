@extends('disseny')
@section('content')
<h1>Dades dels lloguers</h1>
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
            <td>DNI Client</td>
            <td>{{$dades_lloga->dni_client}}</td>
        </tr>
        <tr>
            <td>Codi Unic</td>
            <td>{{$dades_lloga->codi_unic}}</td>
        </tr>
        <tr>
            <td>Data inici lloguer</td>
            <td>{{$dades_lloga->data_inici_lloguer}}</td>
        </tr>
        <tr>
            <td>Hora inici lloguer</td>
            <td>{{$dades_lloga->hora_inici_lloguer}}</td>
        </tr>
        <tr>
            <td>Data final lloguer</td>
            <td>{{$dades_lloga->data_finalitzacio_lloguer}}</td>
        </tr>
        <tr>
            <td>Hora final lloguer</td>
            <td>{{$dades_lloga->hora_finalitzacio_lloguer}}</td>
        </tr>
        <tr>
            <td>Lloc lliurament claus</td>
            <td>{{$dades_lloga->lloc_lliurament_claus}}</td>
        </tr>
        <tr>
            <td>Lloc devolució claus</td>
            <td>{{$dades_lloga->lloc_devolucio_claus}}</td>
        </tr>
        <tr>
            <td>Preu x dia</td>
            <td>{{$dades_lloga->preu_per_dia}}</td>
        </tr>
        <tr>
            <td>Diposit</td>
            <td>{{$dades_lloga->diposit}}</td>
        </tr>
        <tr>
            <td>Quantitat diposits</td>
            <td>{{$dades_lloga->quantitat_diposit}}</td>
        </tr>
        <tr>
            <td>Tipus d'asseguranca</td>
            <td>{{$dades_lloga->tipus_asseguranca}}</td>
        </tr>
    </tbody>   
  </table>
  
  <div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>                     
  </div>

  <div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('lloga') }}">Torna a la llista</a>
  </div>
<div>
@endsection

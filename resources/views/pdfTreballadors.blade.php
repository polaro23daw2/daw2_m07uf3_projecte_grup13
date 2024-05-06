<x-app-layout>
    <!DOCTYPE html>
    <html>
    
    <head>
        <title>Llista de Treballadors</title>
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
                padding: 6px;
                text-align: left;
            }
    
            .table-primary {
                background-color: #e9ecef;
            }
        </style>
    </head>
    
    <body>
        <h1>Llista de Treballadors</h1>
        <table>
            <thead>
                <tr class="table-primary">
                    <td>tid</td>
                    <td>Nom</td>
                    <td>Cognoms</td>
                    <td>NIF</td>
                    <td>Data Naixement</td>
                    <td>Sexe</td>
                    <td>Adreça</td>
                    <td>Telèfon Fixe</td>
                    <td>Telèfon Mòbil</td>
                    <td>Email</td>
                    <td>Treball Distància</td>
                    <td>Tipus Contracte</td>
                    <td>Data Contractació</td>
                    <td>Categoria</td>
                    <td>Nom Feina</td>
                    <td>Sou</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$treballador->tid}}</td>
                    <td>{{$treballador->nom}}</td>
                    <td>{{$treballador->cognoms}}</td>
                    <td>{{$treballador->nif}}</td>
                    <td>{{$treballador->data_naixement}}</td>
                    <td>{{$treballador->sexe}}</td>
                    <td>{{$treballador->adressa}}</td>
                    <td>{{$treballador->tlf_fixe}}</td>
                    <td>{{$treballador->tlf_mobil}}</td>
                    <td>{{$treballador->email}}</td>
                    <td>{{$treballador->treball_distancia}}</td>
                    <td>{{$treballador->tipus_contracte}}</td>
                    <td>{{$treballador->data_contractacio}}</td>
                    <td>{{$treballador->categoria}}</td>
                    <td>{{$treballador->nom_feina}}</}</td>
                    <td>{{$treballador->sou}}</td>
                </tr>
            </tbody>
        </table>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('dashboard') }}">Torna al dashboard</a>
        </div>
    </body>
    
    </html>
    </x-app-layout>
    
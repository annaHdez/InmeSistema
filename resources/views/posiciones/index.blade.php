@extends('layouts.app')
<!-- Van a estar las tablas -->

@section('content')
<br><br>
<h1 class = "text-center">Posiciones</h1>
<br><br>

<body class="text-center">
        <div style = "margin:50px">
            <div class = "col-md-16">
                <div class = "card">
                    <div class = "card-header"> Posiciones
                        <a href = "{{route('posiciones.create')}}" class = "btn btn-success btn-sm">Agregar posición</a>
                    </div>
                    <div class = "card-body">
                        <table class="table table-hover table-bordered table-sm table-condensed">
                            <thead>
                                <th>ID</th>
                                <th>Posición</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$rowPosciciones->id}}</td>
                                    <td>{{$rowPosciciones->posicion}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

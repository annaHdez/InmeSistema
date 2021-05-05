@extends('layouts.app')
<!-- Van a estar las tablas -->

@section('content')
<br><br>
<h1 class = "text-center">Áreas InMekha</h1>
<br><br>

<body class="text-center">
    <div class = "container" style= "display:inline-flex">
        <div style = "margin:50px">
            <div class = "col-md-16">
                <div class = "card">
                    <div class = "card-header"> Departamentos
                        <a href = "{{route('areas.create')}}" class = "btn btn-success btn-sm">Agregar departamento</a>
                    </div>
                    <div class = "card-body">
                        <table class="table table-hover table-bordered table-sm table-condensed">
                            <thead>
                                <th>No.</th>
                                <th>Nombre del departamento</th>
                            </thead>
                            <tbody>
                                @foreach($areas_table as $rowAreas)
                                    <tr>
                                        <td>
                                            1.
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div style = "margin:50px">
            <div class = "col-md-16">
                <div class = "card">
                    <div class = "card-header"> Posiciones
                        <a href = "{{route('areas.create')}}" class = "btn btn-success btn-sm">Agregar posición</a>
                    </div>
                    <div class = "card-body">
                        <table class="table table-hover table-bordered table-sm table-condensed">
                            <thead>
                                <th>ID</th>
                                <th>Posición</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$rowAreas->num}}</td>
                                    <td>{{$rowAreas->departamento}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div style = "margin:50px">
            <div class = "col-md-16">
                <div class = "card">
                    <div class = "card-header"> Puestos de trabajo
                        <a href = "{{route('areas.create')}}" class = "btn btn-success btn-sm">Agregar puesto</a>
                    </div>
                    <div class = "card-body">
                        <table class="table table-hover table-bordered table-sm table-condensed">
                            <thead>
                                <th>Puesto</th>
                                <th>Sueldo</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1.
                                    </td>
                                    <td>

                                    </td>
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

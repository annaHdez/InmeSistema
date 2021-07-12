@extends('layouts.header.header')
<!-- Van a estar las tablas -->

@section('content')
<br><br>
<h1 class = "text-center">Días Festivos</h1>
    @if(Session::has('message'))
    {{Session::get('message')}}
    @endif
<br><br>

<body class="text-center">
    <table class="table table-light table-hover table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Celebración</th>
                <th>
                    <a href = "{{route('diasfest.create')}}" class = "btn btn-info btn-md">Añadir día festivo</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableDias as $rowDias)
                <tr>
                    <td>{{$rowDias->id}}</td>
                    <td>{{$rowDias->fecha}}</td>
                    <td>{{$rowDias->celebracion}}</td>
                    <td>
                        <a  class = "btn btn-success btn-sm">Actualizar</a>
                        <a  class = "btn btn-danger btn-sm">Eliminar</a>
                    </td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection

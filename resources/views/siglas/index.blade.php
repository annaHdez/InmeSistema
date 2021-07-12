@extends('layouts.header.header')
<!-- Van a estar las tablas -->

@section('content')
<br><br>
<h1 class = "text-center">Siglas</h1>
    @if(Session::has('message'))
    {{Session::get('message')}}
    @endif
<br><br>

<body class="text-center">
    <table class="table table-light table-hover table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>
                    <a href = "{{route('siglas.create')}}" class = "btn btn-info btn-md">Agregar departamento</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableSiglas as $rowSigla)
                <tr>
                    <td>{{$rowSigla->id}}</td>
                    <td>{{$rowSigla->descripcion}}</td>
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

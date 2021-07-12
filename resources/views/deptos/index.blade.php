@extends('layouts.header.header')
<!-- Van a estar las tablas -->

@section('content')
<br><br>
<h1 class = "text-center">Departamentos</h1>
    @if(Session::has('message'))
    {{Session::get('message')}}
    @endif
<br><br>

<body class="text-center">
    <table class="table table-light table-hover table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Departamento</th>
                <th>
                    <a href = "{{route('deptos.create')}}" class = "btn btn-info btn-md">Agregar departamento</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableDeptos as $rowDeptos)
                <tr>
                    <td>{{$rowDeptos->id}}</td>
                    <td>{{$rowDeptos->nomDepto}}</td>
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

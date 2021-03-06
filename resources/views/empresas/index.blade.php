@extends('layouts.app')
<!-- Van a estar las tablas -->

@section('content')
<br><br>
<h1 class = "text-center">Departamentos</h1>
<br><br>

<body class="text-center">
    <a href = "{{route('deptos.create')}}" class = "btn btn-primary btn-sm">Agregar departamento</a>
    
    <div class = "container" style= "display:inline-flex">
        <div style = "margin:50px">
            <div class = "col-md-16">
                <div class = "card">
                    <div class = "card-header"> Departamentos</div>
                    <div class = "card-body">
                        <table class="table table-hover table-bordered table-sm table-condensed">
                            <thead>
                                <th>No.</th>
                                <th>Nombre del departamento</th>
                            </thead>
                            <tbody>
                                @foreach($tableDeptos as $rowDepto)
                                    <tr>
                                        <td>
                                            {{$rowDepto->id_depto}}
                                        </td>
                                        <td>
                                            {{$rowDepto->nombre_depto}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
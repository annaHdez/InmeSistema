@extends('layouts.header.header')
<!-- Van a estar las tablas -->

@section('content')
<br><br>
<h1 class = "text-center">Colaboradores</h1>
<br><br>

<body class="text-center">
    <a href = "{{route('colab.create')}}" class = "btn btn-primary btn-sm">Agregar colaborador</a>

    <div class = "container" style= "display:inline-flex">
        <div style = "margin:50px">
            <div class = "col-md-16">
                <div class = "card">
                    <div class = "card-header"> Colaboradores</div>
                    <div class = "card-body">
                        <table class="table table-hover table-bordered table-sm table-condensed">
                            <thead>
                                <th>ID</th>
                                <th>Sexo</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Nombre</th>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Correo</th>
                                <th>Nivel de estudios</th>
                                <th>Fecha de admisión</nav></th>
                                <th>Posición</th>
                                <th>Puesto</th>
                                <th>Sueldo</th>
                                <th>SD IMSS</th>
                                <th>SDI</nav></th>
                                <th>Turno</th>
                                <th>Estatus</th>
                                <th>Fecha baja</th>
                                <th>Antigüedad</th>
                                <th>Costo horas extra</th>
                            </thead>
                            <tbody>
                                @foreach($tableColab as $rowColab)
                                    <tr>
                                        <td>{{$rowColab->id}}</td>
                                        <td>{{$rowColab->sexo}}</td>
                                        <td>{{$rowColab->fechaNac}}</td>
                                        <td>{{$rowColab->nombre}}</td>
                                        <td>{{$rowColab->ape_paterno}}</td>
                                        <td>{{$rowColab->ape_materno}}</td>
                                        <td>{{$rowColab->correo}}</td>
                                        <td>{{$rowColab->grado_estudios}}</td>
                                        <td>{{$rowColab->fecha_admision}}</td>
                                        <td>{{$rowColab->id_posicion}}</td>
                                        <td>{{$rowColab->puesto}}</td>
                                        <td>{{$rowColab->sueldo_base}}</td>
                                        <td>{{$rowColab->SD_IMSS}}</td>
                                        <td>{{$rowColab->SDI}}</td>
                                        <td>{{$rowColab->turno}}</td>
                                        <td>{{$rowColab->estatus}}</td>
                                        <td>{{$rowColab->fecha_baja}}</td>
                                        <td>{{$rowColab->antiguedad}}</td>
                                        <td>{{$rowColab->costoHrsExtra}}</td>
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

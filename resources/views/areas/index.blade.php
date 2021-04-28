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
                        <button href = "" class = "btn btn-success btn-sm">Agregar departamento</button>
                    </div>
                    <div class = "card-body">
                        <table class="table table-hover table-bordered table-sm table-condensed">
                            <thead>
                                <th>Número</th>
                                <th>Nombre del departamento</th>
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

        <div style = "margin:50px">
            <div class = "col-md-16">
                <div class = "card">
                    <div class = "card-header"> Posiciones
                        <button href = "" class = "btn btn-success btn-sm">Agregar posición</button>
                    </div>
                    <div class = "card-body">
                        <table class="table table-hover table-bordered table-sm table-condensed">
                            <thead>
                                <th>ID</th>
                                <th>Posición</th>
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

        <div style = "margin:50px">
            <div class = "col-md-16">
                <div class = "card">
                    <div class = "card-header"> Puestos de trabajo
                        <button href = "" class = "btn btn-success btn-sm">Agregar puesto</button>
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

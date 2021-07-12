@extends('layouts.header.header')
<!-- Formularios de creación -->

@section('content')
<a href="{{URL::to('deptos')}}"> Regresar</a>
<br><br>
<h1 style="text-align: center">Registro de departamentos</h1>
<br><br>
{{HTML::ul($errors->all()) }}
{{Form::open(['url' => 'deptos']) }}

<div class= "row">
    <div class= "form-group col-md-4">
        {{Form::label('nomDepto','Departamento')}}
        {{Form::text('nomDepto', Request::old('nomDepto'), ["class"=>"form-control"])}}
    </div>
    <br>
    <div>
    {{Form::submit('Registrar departamento', ['class' => "btn btn-success"])}}
    {{Form::close()}}
    </div>
</div>
@endsection

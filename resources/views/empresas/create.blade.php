@extends('layouts.app')
<!-- Formularios de creación -->

@section('content')

<a href="{{URL::to('deptos')}} "> Regresar </a><br><br>
<br>
<h1>Formulario de creación</h1> <br>
{{HTML::ul($errors->all()) }}
<!--{Form::open(array(['url' => 'deptos'])) }}-->

<div class= "form-group col-md-4">
    {{Form::label('nombre_depto', 'Nombre del departamento')}}
    {{Form::text('nombre_depto', Request::old('nombre_depto'), ["class" => "form-control"])}}
</div>
<br><br>
{{{Form::submit('Registrar departamento', ["class" => "btn btn-success"])}}}
{{Form::close()}}

@endsection

@extends('layouts.header.header')
<!-- Formularios de creación -->

@section('content')
<a href="{{URL::to('siglas')}}"> Regresar</a>
<br><br>
<h1 style="text-align: center">Formulario de creación</h1>
<br><br>
{{HTML::ul($errors->all()) }}
{{Form::open(['url' => 'siglas']) }}

<div class= "row">
    <div class= "form-group col-md-4">
        {{Form::label('id','ID')}}
        {{Form::text('id', Request::old('id'), ["class"=>"form-control"])}}
    </div>
    <br>
    <div class= "form-group col-md-4">
        {{Form::label('descripcion','Descripción')}}
        {{Form::text('descripcion', Request::old('descripcion'), ["class"=>"form-control"])}}
    </div>
    <br>
    <div>
    {{Form::submit('Registrar sigla', ['class' => "btn btn-success"])}}
    {{Form::close()}}
    </div>
</div>
@endsection

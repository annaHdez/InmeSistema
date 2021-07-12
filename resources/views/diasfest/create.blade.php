@extends('layouts.header.header')
<!-- Formularios de creación -->

@section('content')
<a href="{{URL::to('diasfest')}}"> Regresar</a>
<br><br>
<h1 style="text-align: center">Formulario de creación</h1>
<br><br>
{{HTML::ul($errors->all()) }}
{{Form::open(['url' => 'diasfest']) }}

<div class= "row">
    <div class= "form-group col-md-4">
        {{Form::label('fecha','Fecha')}}
        {{Form::date('fecha', Request::old('fecha'), ["class"=>"form-control"])}}
    </div>
    <br>
    <div class= "form-group col-md-4">
        {{Form::label('celebracion','Celebración')}}
        {{Form::text('celebracion', Request::old('celebracion'), ["class"=>"form-control"])}}
    </div>
    <br>
    <div>
    {{Form::submit('Registrar día', ['class' => "btn btn-success"])}}
    {{Form::close()}}
    </div>
</div>
@endsection

@extends('layouts.app')
<!-- Formularios de creación -->

@section('content')

<a href="{{ URL::to(areas) }} "> Regresar </a><br><br>

<h1>Formulario de creación</h1>
{{HTML::ul($errors->all()) }}
{{Form::open(array(['url' => 'areas'])) }}

@if()
    <div class= "row">
        <div class= "form-group col-md-4">
            {{ Form::label('number', 'Numero')}}
            {{Form::text()}}
        </div>
    </div>
@endif

@endsection

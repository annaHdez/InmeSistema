@extends('layouts.app')
<!-- Formularios de creación -->

@section('content')

<a href="{{ URL::to(areas) }} "> Regresar </a>
<br><br>

{{HTML::ul($errors->all()) }}

{{Form::open(array('url' => 'areas')) }}

<div class= "row">
    <div class= "form-group col-md-4">

    </div>
</div>

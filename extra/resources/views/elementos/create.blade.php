@extends('layouts.main')

@section('title','Laravel 8 - Crear elemento')

@section('content')
<p><b>crear</b></p>
<form action="{{route('elementos.store')}}" method="POST">
	@csrf
	<p><label>Nombre:<input type="text" name="name" /></label></p>
	<p><label>Versión:<input type="text" name="version" /></label></p>
	<p><label>Descripción:<textarea name="description" rows="5"></textarea></label></p>
	<p><button type="submit">Enviar</button></p>
</form>
<p><a href="/elementos">elementos</a></p>
<p><a href="/">home</a></p>
@endsection('content')

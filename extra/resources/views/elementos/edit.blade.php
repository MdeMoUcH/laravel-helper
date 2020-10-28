@extends('layouts.main')

@section('title','Laravel 8 - Editar elemento')

@section('content')
<p><b>crear</b></p>
<form action="{{route('elementos.save', $elemento)}}" method="POST">
	@csrf
	@method('put')
	<p><label>Nombre:<input type="text" name="name" value="{{$elemento->name}}" /></label></p>
	<p><label>Versión:<input type="text" name="version" value="{{$elemento->version}}" /></label></p>
	<p><label>Descripción:<textarea name="description" rows="5">{{$elemento->description}}</textarea></label></p>
	<p><button type="submit">Guardar</button></p>
</form>
<p><a href="/elementos">elementos</a></p>
<p><a href="/">home</a></p>
@endsection('content')

@extends('layouts.main')

@section('title','Laravel 8 - Crear elemento')

@section('content')
<p><b>crear</b></p>
<form action="{{route('elementos.store')}}" method="POST">
	@csrf
	<p><label>Nombre:<input type="text" name="name" value="{{old('name')}}" /></label></p>
	@error('name')
	<p>{{$message}}</p>
	@enderror
	<p><label>Versión:<input type="text" name="version" value="{{old('version')}}" /></label></p>
	@error('version')
	<p>{{$message}}</p>
	@enderror
	<p><label>Descripción:<textarea name="description" rows="5">{{old('description')}}</textarea></label></p>
	<p><button type="submit">Enviar</button></p>
</form>
<p><a href="/elementos">elementos</a></p>
<p><a href="/">home</a></p>
@endsection('content')

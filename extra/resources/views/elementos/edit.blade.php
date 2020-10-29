@extends('layouts.main')

@section('title','Laravel 8 - Editar elemento')

@section('content')
<p><b>crear</b></p>
<form action="{{route('elementos.update', $elemento)}}" method="POST">
	@csrf
	@method('put')
	<p><label>Nombre:<input type="text" name="name" value="{{old('name',$elemento->name)}}" /></label></p>
	@error('name')
	<p>{{$message}}</p>
	@enderror
	<p><label>Versión:<input type="text" name="version" value="{{old('version',$elemento->version)}}" /></label></p>
	@error('version')
	<p>{{$message}}</p>
	@enderror
	<p><label>Descripción:<textarea name="description" rows="5">{{old('description',$elemento->description)}}</textarea></label></p>
	@error('description')
	<p>{{$message}}</p>
	@enderror
	<p><button type="submit">Guardar</button></p>
</form>
<p><a href="/elementos">elementos</a></p>
<p><a href="/">home</a></p>
@endsection('content')

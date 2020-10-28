@extends('layouts.main')

@section('title','Laravel 8 - Elementos')

@section('content')
<p><a href="{{route('elementos.create')}}">Crear</a></p>
	@foreach($elementos as $elemento)
	<!--<p><a href="/elementos/{{$elemento->id}}">{{$elemento->name}}</a></p>-->
	<p><a href="{{route('elementos.show',$elemento->id)}}">{{$elemento->name}}</a></p>
	@endforeach
	{{$elementos->links()}}

<p><a href="/">home</a></p>
@endsection('content')

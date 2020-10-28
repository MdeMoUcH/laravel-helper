@extends('layouts.main')

@section('title','Laravel 8 - Elemento - '.$elemento->name)

@section('content')
<p><b>{{$elemento->name}}</b></p>
@if($elemento->version)
<p>(Versión {{$elemento->version}})</p>
@endif
<p><a href="{{route('elementos.edit',$elemento->id)}}">Editar</a></p>
<p><a href="{{route('elementos.index')}}">elementos</a></p>
<p><a href="/">home</a></p>
@endsection('content')


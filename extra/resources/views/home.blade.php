@extends('layouts.main')

@section('title','Laravel 8')

@section('content')
<p>Ejemplo de uso básico para laravel</p>
<p><a href="{{route('elementos.index')}}">elementos</a></p>
@endsection()

@extends('layouts.main')

@section('title','Laravel 8 - Elementos - '.$elemento)

@section('content')
<p>
<b>{{$elemento}}</b>
@if($version)
 (Versión {{$version}})
@endif
</p>
<p><a href="/elementos">elementos</a></p>
<p><a href="/">home</a></p>
@endsection('content')


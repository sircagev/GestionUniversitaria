@extends('layouts.dash')


@section('titulo-page')
 Home
@endsection

@section('content')
<h1>hola {{ auth()->user()->name }}</h1>
@endsection
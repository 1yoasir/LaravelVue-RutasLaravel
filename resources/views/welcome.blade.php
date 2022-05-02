@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-1">Bienvenido a Administrador de Notas</h1>

    <a href="{{ url ('/notas')}}" class="btn btn-primary btn-md">Entrar</a>
</div>
@endsection

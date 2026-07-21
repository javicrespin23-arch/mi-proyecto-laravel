@extends('layouts.base')

@section('titulo', 'Sobre Nosotros')
@section('encabezado', 'Nosotros')

@section('contenido')
    <p>Somos desarrolladores aprendiendo a usar Laravel directamente desde VS Code.</p>
    <p><strong>Usuario actual:</strong> {{ $usuario }}</p>
@endsection
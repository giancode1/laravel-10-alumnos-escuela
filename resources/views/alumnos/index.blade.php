@extends('layout/template')


@section('title', 'Alumnos | Escuela')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>Listado de alumnos</h2>

        <a href="{{ url('alumnos/create') }}" class="btn btn-primary">Nuevo registro</a>
    </div>
</main>


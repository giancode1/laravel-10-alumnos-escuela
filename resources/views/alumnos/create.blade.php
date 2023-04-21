@extends('layout/template')


@section('title', 'Registrar alumno | Escuela')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Registrar alumno</h2>

        <form action="{{ url('alumnos') }}" method="post">

            @csrf
            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
                <div class="col-sm-5">
                    <input class="form-control" value="{{ old('matricula') }}" type="text" name="matricula" id="matricula" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo:</label>
                <div class="col-sm-5">
                    <input class="form-control" value="{{ old('nombre') }}" type="text" name="nombre" id="nombre" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                <div class="col-sm-5">
                    <input value="{{ old('fecha') }}" type="date" class="form-control" name="fecha" id="fecha" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                <div class="col-sm-5">
                    <input value="{{ old('telefono') }}" type="number" class="form-control" name="telefono" id="telefono" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-5">
                    <input value="{{ old('email') }}" type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nivel" class="col-sm-2 col-form-label">Nivel:</label>
                <div class="col-sm-5">
                    <select name="nivel" id="nivel" class="form-select" required>
                        <option value="">Seleccionar nivel</option>
                        @foreach ($niveles as $nivel)
                            <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{ url('alumnos') }} " class="btn btn-secondary">Regresar</a>

            <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>

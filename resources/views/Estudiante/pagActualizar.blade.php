@extends('pagPlantilla')

@section('Titulo')
    <h1 class="display-4">Pagina de actualizar </h1>
@endsection

@section('Cuerpo')
@if(session('msj'))
        <div class="alert alert-success">
            {{ session('msj') }}
        </div>
    @endif

    <div class="btn btn-success d-grid fs-5 mb-2">Registrar nuevo seguimiento...</div>

    <form action=" {{ route ('Estudiante.xUpdate' ,$xActAlumnos -> id)}}" method="post" class="d-grid gap-2">
        @method('PUT')
        @csrf

        @error('codEst')
            <div class="alert alert-danger">
                El código es requerido
            </div>
        @enderror

        @error('nomEst')
            <div class="alert alert-danger">
                El nombre es requerido 
            </div>
        @enderror

        @error('apeEst')
            <div class="alert alert-danger">
                El apellido es requerido 
            </div>
        @enderror

        @error('fnaEst')
            <div class="alert alert-danger">
                La fecha es requerido 
            </div>
        @enderror

        @error('turMat')
            <div class="alert alert-danger">
                El turno es requerido 
            </div>
        @enderror

        @error('semMat')
            <div class="alert alert-danger">
                El semestre es requerido 
            </div>
        @enderror

        @error('estMat')
            <div class="alert alert-danger">
                El estado es requerido 
            </div>
        @enderror

        <input type="text" name="codEst" placeholder="Código" value="{{ $xActAlumnos -> codEst}}" class="form-control mb-1">
        <input type="text" name="nomEst" placeholder="Nombres" value="{{ $xActAlumnos -> nomEst}}" class="form-control mb-1">
        <input type="text" name="apeEst" placeholder="Apellidos" value="{{ $xActAlumnos -> apeEst }}" class="form-control mb-1">
        <input type="text" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ $xActAlumnos -> fnaEst }}" class="form-control mb-1">
        <select name="turMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="1" @if ($xActAlumnos-> turMat == 1 ) {{"SELECTED"}} @endif> Turno Dia </option>
            <option value="2" @if ($xActAlumnos-> turMat == 2) {{"SELECTED"}} @endif>Turno Tarde </option>
            <option value="3" @if ($xActAlumnos-> turMat == 3 ) {{"SELECTED"}} @endif>Turno Noche </option>
        </select>
        <select name="semMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            @for($i=1; $i < 7; $i++)
                <option value="{{$i}}" @if ($xActAlumnos-> semMat == $i) {{"SELECTED"}} @endif>Semestre {{$i}}</option>
            @endfor
        </select>
        <select name="estMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="0" @if ($xActAlumnos-> estMat == 0 ) {{"SELECTED"}} @endif>Inactivo</option>
            <option value="1" @if ($xActAlumnos-> estMat == 1 ) {{"SELECTED"}} @endif>Activo</option>
        </select>
        <button class="btn btn-warning" type="submit">Actualizar</button>
    </form>

@endsection
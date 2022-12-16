@extends('pagPlantilla')

@section('Titulo')
    <h1 class="display-4">Pagina lista </h1>
@endsection

@section('Cuerpo')
    <h3> Detalle estudiante </h3>
    
    <p>id:                                   {{ $xDetAlumnos ->id}} </p>
    <p>Codigo:                               {{ $xDetAlumnos ->codEst}} </p>
    <p>Apellido y nombres:                   {{ $xDetAlumnos ->apeEst}}, {{ $xDetAlumnos ->nomEst}} </p>
    <p>Fecha de nacimiento:                  {{ $xDetAlumnos ->fnaEst}} </p>
    <p>Turno:                                {{ $xDetAlumnos ->turMat}} </p>
    <p>Semestre:                             {{ $xDetAlumnos ->semMat}} </p>
    <p>Estado de matricula:                  {{ $xDetAlumnos ->estMat}} </p>

@endsection


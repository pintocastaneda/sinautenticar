<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl  sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome />  -->

@extends('pagPlantilla')

@section('Titulo')
    <h1>Pagina galeria </h1>
@endsection

@section('Cuerpo')
    <h3>Foto de codigo {{$valor}}  {{$otro}} </h3>
@endsection

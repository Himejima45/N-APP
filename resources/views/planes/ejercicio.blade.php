@extends('layouts.app')

@section('title', 'Plan de ejercicios')

@php

$objetivos = [
    1 => 'Subir de Peso',
    2 => 'Bajar de Peso',
    3 => 'Buena Salud',
    4 => 'Terapia',
];
    
$horarios = [
    1 => 'Lunes a Viernes',
    2 => 'Lunes-Miercoles-Viernes',
    3 => 'Lunes a Jueves',
    4 => 'Martes-Jueves-Sabado',
];

@endphp

@section('content')

    <div class="pagetitle">
        <h1>Plan de Ejercicios</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Seleccionar Modo</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card text-white">
                    <img src="{{ asset('images/exercises/ejer_11.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay text-center">
                        <h5 class="card-title text-white text-center">Entrenador Personal</h5>
                        <p class="card-text">Un buen programa de entrenamiento físico diseñado por profesionales te
                            permitirá mejorar la condición, la constitución y la naturaleza de tu cuerpo.</p>
                        <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#mi-modal"><i class="bi bi-star"> </i>Empezar</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card text-white">
                    <img src="{{ asset('images/exercises/ejer_1.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay text-center">
                        <h5 class="card-title text-white text-center">Plan Personalizado</h5>
                        <p class="card-text">Si estás buscando mejorar tu salud y bienestar, crear un plan de fitness
                            personalizado puede ser la clave para alcanzar tus metas.</p>
                        <a href="{{ route('ejercicio-personalizado') }}" type="button"
                            class="btn btn-primary rounded-pill">Empezar</a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Objetivo</th>
                                <th scope="col">Grupo muscular</th>
                                <th scope="col">Horario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ejercicios as $ejercicio)
                                <tr>
                                    <th scope="row">{{ $ejercicio->id }}</th>
                                    <td>{{ $ejercicio->nombre }}</td>
                                    <td>{{ $ejercicio->descripcion }}</td>
                                    <td>{{ $objetivos[$ejercicio->objetivo] }}</td>
                                    <td>{{ $ejercicio->grupo_muscular->nombre }}</td>
                                    <td>{{ $horarios[$ejercicio->horario] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

        <div class="modal fade" id="mi-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Este es el titulo</h5>
                        <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                    </div>

                    <div class="modal-body text-center">

                        <div class="row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Basico</h5>
                                        <h3>$0</h3>
                                        <ul>
                                            <li>Especialista</li>
                                            <li>Entrenador</li>
                                            <li>Dieta personalizada</li>
                                            <li>consulta gratis</li>
                                        </ul>
                                        <a href="{{ route('plan_entrenador') }}" class="btn btn-primary">Comprar
                                            ahora</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title">Pro</h5>
                                        <h3>$20</h3>
                                        <ul>
                                            <li class="list-group">Especialista</li>
                                            <li class="list-group">Entrenador</li>
                                            <li class="list-group">Dieta personalizada</li>
                                            <li class="list-group">consulta gratis</li>
                                        </ul>
                                        <a href="{{ route('plan_entrenador') }}" class="btn btn-primary">Comprar
                                            ahora</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title">Premium</h5>
                                        <h3>$45</h3>
                                        <ul>
                                            <li class="list-group">Especialista</li>
                                            <li class="list-group">Entrenador</li>
                                            <li class="list-group">Dieta personalizada</li>
                                            <li class="list-group">Consulta gratis</li>
                                        </ul>
                                        <a href="{{ route('plan_entrenador') }}" class="btn btn-primary">Comprar
                                            ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                        <button type="button" class="btn btn-primary">guardar</button>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

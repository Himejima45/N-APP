@extends('layouts.app')

@section('title', 'Receta nutricional')

@section('content')
    <div class="pagetitle">
        <h1>Crear Receta Nutricional</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Crear Receta</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card text-white">
                    <img src="{{ asset('images/food/batidos_2.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay text-center">
                        <h5 class="card-title text-white text-center">Crear Receta</h5>
                        <p class="card-text">Un buen programa de entrenamiento físico diseñado por profesionales te
                            permitirá mejorar la condición, la constitución y la naturaleza de tu cuerpo.</p>
                        <a href="{{ route('crear-receta') }}" class="btn btn-primary rounded-pill">
                            <i class="bi bi-star"> </i>Empezar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section dashboard">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <div class="row">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Comida</th>
                                <th scope="col">Receta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($planes as $plan)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $plan->nombre }}</td>
                                    <td>{{ $plan->tipo->nombre }}</td>
                                    <td>{{ $plan->comida->nombre }}</td>
                                    <td>{{ $plan->receta->nombre }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Siguente</a></li>
                        </ul>
                    </nav><!-- End Basic Pagination -->

                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection

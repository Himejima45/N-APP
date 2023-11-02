@extends('layouts.app')

@section('title', 'Lista especialista')

@section('content')

    <div class="pagetitle">
        <h1>Planes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Lista</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card text-white">
                    <img src="{{ asset('images/food/receta_2.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay text-center">
                        <h5 class="card-title text-white text-center">Plan con Especialista</h5>
                        <p class="card-text">Estos planes ofrecen una red de proveedores de atención. Los proveedores tienen
                            un contrato con el plan especialista. Esto significa que cobran una tarifa fija por sus
                            servicios. Usted elegirá un especialista de atención primaria.</p>
                        <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#mi-modal"><i class="bi bi-star"> </i>Empezar</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card text-white">
                    <img src="{{ asset('images/food/receta_3.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay text-center">
                        <h5 class="card-title text-white text-center">Plan Personalizado</h5>
                        <p class="card-text">El proceso de crear un plan alimenticio personalizado implica varios pasos.
                            Vamos a mostrarte los pasos que debes seguir para hacer planes nutricionales.</p>
                        <a href="{{ route('nutricional-personalizado') }}" type="button"
                            class="btn btn-primary rounded-pill">Empezar</a>
                    </div>
                </div>
            </div>
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
                                            <a href="{{ route('plan_especialista') }}" class="btn btn-primary">Comprar
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
                                            <a href="{{ route('plan_especialista') }}" class="btn btn-primary">Comprar
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
                                            <a href="{{ route('plan_especialista') }}" class="btn btn-primary">Comprar
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

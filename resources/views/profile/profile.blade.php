@extends('layouts.app')

@section('title', 'Perfil')

@section('content')

    <div class="pagetitle">
        <h1>Perfil</h1>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('images/users/profile_2.png') }}" alt="Profile" class="rounded-circle">
                        <h2>est</h2>
                        <ul>
                            <li class="dropdown-item">Fecha Nacimiento: 15/2/89</li>
                            <li class="dropdown-item">Edad: 25 años</li>
                        </ul>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
             
                        
                   
                    <div class="card-body pt-3">
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Acerca de</h5>
                                <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                                    temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae
                                    quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                <h5 class="card-title">Detalles De Usuario</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Objetivo</div>
                                    <div class="col-lg-9 col-md-8"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Trabajo</div>
                                    <div class="col-lg-9 col-md-8">Diseñador web</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pais</div>
                                    <div class="col-lg-9 col-md-8">VEN</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Telefono</div>
                                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Correo Electronico</div>
                                    <div class="col-lg-9 col-md-8">kevin45@email.com</div>
                                </div>

                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
    </section>
@endsection

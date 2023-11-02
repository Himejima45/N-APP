@extends('layouts.app')

@section('title', 'Crear receta')

@section('js')
    <script>
        const recetas = @json($recetas);
        console.log(recetas)
    </script>
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Crear Plan Nutricional</h1>
        <nav>
            <!-- <ol class="breadcrumb">
                                                                                         <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                                                                       </ol> -->
        </nav>
    </div>

    <section class="section">

        <!-- Left side columns -->
        <div class="col-lg-10">
            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <div class="row text-center">
                            <h5 class="card-title">Crear Plan Personalizado</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="{{ route('guardar-receta') }}">
                                @csrf
                                <div class="row mb-3 justify-content-center ">
                                    <label for="inputText">Nombre del Plan</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="nombre"
                                            class="form-control @error('nombre') is-invalid @enderror">
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-center">
                                    <label>Tipo</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <div class="input-group mt-3">
                                                <select id="tipo" name="tipos"
                                                    class="form-control @error('tipos') is-invalid @enderror">
                                                    <option value="" selected disabled>Seleccione tipo</option>
                                                    @foreach ($tipos as $tipo)
                                                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback">listo</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-center">
                                    <label>Comida</label>
                                    <div class="col-lg-8">
                                        <div class="input-group mt-3">
                                            <select id="comida" name="comidas"
                                                class="form-control @error('comidas') is-invalid @enderror">
                                                <option value="" selected disabled>Seleccione comida</option>
                                                @foreach ($comidas as $comida)
                                                    <option value="{{ $comida->id }}">{{ $comida->nombre }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">listo</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-center">
                                    <label>Receta</label>
                                    <div class="col-lg-8">
                                        <select
                                            class="form-select js-example-basic-single @error('recetas') is-invalid @enderror"
                                            name="recetas" id="sel_receta">
                                            <option value="" selected disabled>Seleccione receta</option>
                                            @foreach ($recetas as $receta)
                                                <option value="{{ $receta->id }}">{{ $receta->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-center">
                                    {{-- <label>Tipo</label> --}}
                                    <div class="col-3">
                                        <input type="text" id="campo_tipo" class="form-control" disabled value="">
                                    </div>

                                    {{-- <label>Comida</label> --}}
                                    <div class="col-3">
                                        <input type="text" id="campo_tipo" class="form-control" disabled value="">
                                    </div>

                                    {{-- <label>Receta</label> --}}
                                    <div class="col-3">
                                        <input type="text" id="campo_tipo" class="form-control" disabled value="">
                                    </div>
                                </div>

                                <div class="row mb-3 text-center">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary w-50">Crear</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

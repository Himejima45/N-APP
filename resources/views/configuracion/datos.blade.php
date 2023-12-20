@extends('layouts.app')

@section('title', 'Datos físicos')

@section('css')
    <link href="css/reco.css" rel="stylesheet">
@endsection

@section('js')
    <script src="js/reco.js"></script>
@endsection

@section('content')
    <section>

        <section class="section">

            <!-- Left side columns -->
            <div class="col-lg-10">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <div class="row text-center">
                                <h5 class="card-title">Colocar datos fiscos</h5>

                                <!-- General Form Elements -->
                                <form method="POST"action="{{ route('guardar-datos') }}">
                                    @csrf
                                    <div class="row mb-3 justify-content-center ">
                                        <div class="col-lg-8">
                                            <input type="text" hidden="" value="{{ auth()->user()->id }}"
                                                id="usuario_id" name="usuario_id"
                                                class="form-control @error('nombre') is-invalid @enderror">
                                        </div>
                                    </div>

                                    <div class="row mb-3 justify-content-center">
                                        <label>¿Cual es tu objetivo?</label>
                                        <div class="col-lg-8">
                                            <div>
                                                <div class="input-group mt-3">
                                                    <select id="habitos" name="objetivo"
                                                        class="form-control @error('tipos') is-invalid @enderror">
                                                        <option value=""selected disabled>seleciona tus objetivo
                                                        </option>
                                                        <option value="Bajar de Peso">Bajar de Peso</option>
                                                        <option value="Subir de Peso">Subir de Peso</option>
                                                        <option value="Balancear mi nutrición">Balancear mi nutrición
                                                        </option>
                                                    </select>
                                                    <div class="valid-feedback">listo</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-center">
                                        <label>Habitos Alimenticios:</label>
                                        <div class="col-lg-8">
                                            <div>
                                                <div class="input-group mt-3">
                                                    <select id="habitos" name="habitos"
                                                        class="form-control @error('tipos') is-invalid @enderror">
                                                        <option value=""selected disabled>seleciona tus habitos
                                                        </option>
                                                        <option value="No respeto horarios de comida">No respeto horarios de
                                                            comida</option>
                                                        <option value="Como dulce o alimentos azucardos con frecuencia">Como
                                                            dulce o alimentos azucardos con frecuencia</option>
                                                        <option value="Como comida chatarra , procesada o enlatada"> Como
                                                            comida chatarra , procesada o enlatada</option>
                                                        <option value="Consumo alimentos fritos"> Consumo alimentos fritos
                                                        </option>

                                                    </select>
                                                    <div class="valid-feedback">listo</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-center">
                                        <label>Genero</label>
                                        <div class="col-lg-8">
                                            <div>
                                                <div class="input-group mt-3">
                                                    <select id="genero" name="genero"
                                                        class="form-control @error('tipos') is-invalid @enderror">
                                                        <option value="" selected disabled>Seleciona tu genero
                                                        </option>
                                                        <option value="0">Femenino</option>
                                                        <option value="1">Masculino</option>
                                                    </select>
                                                    <div class="valid-feedback">listo</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-center ">
                                        <label for="inputText">Peso</label>
                                        <div class="col-lg-8">
                                            <input type="number" name="pesoi"
                                                class="form-control @error('nombre') is-invalid @enderror">
                                        </div>

                                    </div>
                                    <div class="row mb-3 justify-content-center ">
                                        <label for="inputText">Altura</label>
                                        <div class="col-lg-8">
                                            <input type="number" name="altura"
                                                class="form-control @error('nombre') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-center">
                                        <label for="inputText">IMC</label>
                                        <div class="col-lg-8">
                                            <input type="number" name="imc" class="form-control">

                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-center">
                                        <label for="inputText">Discapacidad</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="discapacidad" class="form-control">

                                        </div>
                                    </div>

                                    <div class="row mb-3 justify-content-center">
                                        <label for="inputText">Alergia</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="alergia" class="form-control">

                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-center">
                                        <label>Nacionalidad</label>
                                        <div class="col-lg-8">
                                            <div>
                                                <div class="input-group mt-3">
                                                    <select id="genero" name="nacionalidad"
                                                        class="form-control @error('tipos') is-invalid @enderror">
                                                        <option value="" selected disabled>Seleciona tu Nacionalidad
                                                        </option>
                                                        @foreach ($nacionalidades as $nacionalidad)
                                                            <option value="{{ $nacionalidad->id }}">
                                                                {{ $nacionalidad->pais }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="valid-feedback">listo</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-center ">
                                        <label for="inputText">Edad</label>
                                        <div class="col-lg-8">
                                            <input type="date" name="edad"
                                                class="form-control @error('nombre') is-invalid @enderror">
                                        </div>

                                    </div>
                                    <div class="row mb-3 justify-content-center">
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

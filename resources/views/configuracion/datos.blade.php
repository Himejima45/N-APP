@extends('layouts.app')

@section('title', 'Datos físicos')

@section('css')
    <link href="css/reco.css" rel="stylesheet">
@endsection

@section('js')
    <script src="js/reco.js"></script>
@endsection

@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <header>Nutri-Star</header>
            <div class="progress-bar">
                <div class="step">
                    <p>
                        Objetivo
                    </p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check bi bi-check"></div>
                </div>
                <div class="step">
                    <p>
                        Habitos
                    </p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check bi bi-check"></div>
                </div>
                <div class="step">
                    <p>
                        Cuerpo
                    </p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>
                        Fecha
                    </p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check bi bi-check"></div>
                </div>
            </div>
            <div class="form-outer">
                <form action="#">
                    <div class="page slide-page">
                        <div class="title">
                            ¿Cual es tu objetivo?
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Bajar de Peso
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Subir de Peso
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Balancear mi nutrición
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Consultar con nutricionista
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Todas las anteriores
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <button class="firstNext next">Siguiente</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">
                            Habitos Alimenticios:
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    No respeto horarios de comida
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Como dulce o alimentos azucardos con frecuencia
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Como comida chatarra , procesada o enlatada
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Consumo alimentos fritos
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    No tengo habitos negativos que afecten mi salud
                                </label>
                            </div>
                        </div>
                        <div class="field btns">
                            <button class="prev-1 prev">Regresar</button>
                            <button class="next-1 next">Siguiente</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">
                            Informacion corporal:
                        </div>
                        <div class="field">
                            <div class="label">
                                Genero
                            </div>
                            <select>
                                <option>Masculino</option>
                                <option>Femenino</option>
                                <option>Otro..</option>
                            </select>
                        </div>
                        <br>
                        <div class="field">
                            <div class="label">
                                Peso(kg)
                            </div>
                            <input type="number" style="height: 100%;
                      width: 100%;">
                        </div>
                        <br>
                        <div class="field">
                            <div class="label">
                                Altura(cm)
                            </div>
                            <input type="number" style="height: 100%;
                      width: 100%;">
                        </div>
                        <br>
                        <div class="field btns">
                            <button class="prev-2 prev">Regresar</button>
                            <button class="next-2 next">Siguiente</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">
                            Fecha de Nacimiento:
                        </div>
                        <div class="field">

                            <input type="date" style="height: 100%;
                       width: 100%;">
                        </div>
                        <br>
                        <div class="field btns">
                            <button class="prev-3 prev">Regresar</button>
                            <button class="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection

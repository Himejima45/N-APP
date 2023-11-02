@extends('layouts.app')

@section('title', 'Logros y metas')

@section('js')
    <script src="{{ asset('/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/plugins/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('/plugins/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('/js/calc.js') }}"></script>
@endsection

@section('content')

    <div class="pagetitle">
        <h1>Logros y Metas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Progreso</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ingesta de Vitaminas</h5>

                        <!-- Bar Chart -->
                        <div id="barChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#barChart"), {
                                    series: [{
                                        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350
                                    },
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 4,
                                            horizontal: true,
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    xaxis: {
                                        categories: ['Vitamina A', 'Vitamina E', 'Vitamina C', 'Calcio', 'B1, B2 ,B3',
                                            'Vitamina K', 'Biotina',
                                            'Tiamina ', 'Zinc', 'Hierro'
                                        ],
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Bar Chart -->

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Consumo de Alimentos Diario</h5>

                        <!-- Pie Chart -->
                        <div id="pieChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#pieChart"), {
                                    series: [20, 40, 15, 16, 22],
                                    chart: {
                                        height: 350,
                                        type: 'pie',
                                        toolbar: {
                                            show: true
                                        }
                                    },
                                    labels: ['Carbohidratos', 'Proteinas', 'Lipidos', 'Calorias', 'Energia']
                                }).render();
                            });
                        </script>
                        <!-- End Pie Chart -->

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Peso(kg)</h5>

                        <!-- Line Chart -->
                        <div id="lineChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#lineChart"), {
                                    series: [{
                                        name: "kg",
                                        data: [70, 73, 74, 78, 80, 82, 85, ]
                                    }],
                                    chart: {
                                        height: 350,
                                        type: 'line',
                                        zoom: {
                                            enabled: false
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        curve: 'straight'
                                    },
                                    grid: {
                                        row: {
                                            colors: ['#f3f3f3',
                                                'transparent'
                                            ], // takes an array which will be repeated on columns
                                            opacity: 0.5
                                        },
                                    },
                                    xaxis: {
                                        categories: ['55 kg', '65 kg', '75 kg', '85 kg', '90 kg', '95 kg', '100 kg'],
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Line Chart -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Calculadora IMC</h5>
                        <div class="row">
                            <div class="from-group mb-2">
                                <label for="kg">Ingrese Peso (kg):</label>
                                <input class="form-control" type="number" step="any"id="kg">
                            </div>
                            <div class="from-group mb-2">
                                <label for="m">Ingrese Altura (cm):</label>
                                <input class="form-control" type="number" step="any" id="m">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary w-100"id="calc">Calcular</button>
                            </div>
                            <hr>

                            <div class="progress-stacked">
                                <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                    <div class="progress-bar bg-info">Por Debajo</div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                    <div class="progress-bar bg-success">Peso Normal</div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                    <div class="progress-bar bg-warning">Obesidad</div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Segment four" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                    <div class="progress-bar bg-danger">Obesidad Morbida</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

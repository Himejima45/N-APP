@extends('layouts.app')

@section('title', 'Entrenamiento')

@section('js')
    <script src="{{ asset('/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/plugins/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('/plugins/echarts/echarts.min.js') }}"></script>
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Peso</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Progreso</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Peso(kg)</h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Progreso</li>
                        </ol>
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
                        <h5 class="card-title">Peso Ideal</h5>

                        <!-- Bar Chart -->
                        <canvas id="barChart" style="max-height: 400px;"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#barChart'), {
                                    type: 'bar',
                                    data: {
                                        labels: ['Obesidad Morvida', 'Obesidad Morvida', 'Obesidad Morvida', 'Sobre Peso',
                                            'Saludable', 'Peso por debajo'
                                        ],
                                        datasets: [{
                                            data: [80, 70, 60, 50, 40, 30, 20],
                                            backgroundColor: [
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(255, 159, 64, 0.2)',
                                                'rgba(255, 205, 86, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                            ],
                                            borderColor: [
                                                'rgb(153, 102, 255)',
                                                'rgb(255, 99, 132)',
                                                'rgb(255, 159, 64)',
                                                'rgb(255, 205, 86)',
                                                'rgb(54, 162, 235)',
                                                'rgb(75, 192, 192)',
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            });
                        </script>
                        <!-- End Bar CHart -->

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

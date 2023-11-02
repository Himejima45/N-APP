@extends('layouts.app')

@section('title', 'Datos nutricionales')

@section('js')
    <script>
        $(document).ready(function() {
            var url = 'http://localhost:2700/api/valores';

            $('#tablaValores').Datatable({
                "ajax": {
                    "url": url,
                    "dataSrc": ""
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "nombre"
                    },
                    {
                        "data": "calorias"
                    },
                    {
                        "data": "hc"
                    },
                    {
                        "data": "proteinas"
                    },
                    {
                        "data": "grasas"
                    },
                ],
                "columnsDefs": ""

            });

        });
    </script>
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Datos nutricionales</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Valor nutricional</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <div class="row">
                    <!-- <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Valor nutricional de alimentos</h5> -->
                    <!-- Table with stripped rows -->
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Calorias</th>
                                <th scope="col">Hc</th>
                                <th scope="col">Proteinas</th>
                                <th scope="col">Grasas</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>Leche chocolatada</td>
                                <td>62</td>
                                <td>10</td>
                                <td>3</td>
                                <td>1.1</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Leche descremada en polvo</td>
                                <td>36</td>
                                <td>10</td>
                                <td>3.5</td>
                                <td>0.1</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Yogur con cereale</td>
                                <td>48</td>
                                <td>9</td>
                                <td>3</td>
                                <td>0.05</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Yogur descr. y corn flakes</td>
                                <td>63</td>
                                <td>11.4</td>
                                <td>4.2</td>
                                <td>0.04</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Queso crema</td>
                                <td>245</td>
                                <td>3.7</td>
                                <td>8.2</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Queso cottage</td>
                                <td>95</td>
                                <td>2</td>
                                <td>11.4</td>
                                <td>4.5</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Yema de huevo</td>
                                <td>341</td>
                                <td>2</td>
                                <td>16</td>
                                <td>29.2</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Hamburguesa</td>
                                <td>230</td>
                                <td>0.5</td>
                                <td>14</td>
                                <td>18.3</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Carne de cerdo gorda</td>
                                <td>346</td>
                                <td>0</td>
                                <td>14.6</td>
                                <td>31.4</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Ciervo</td>
                                <td>120</td>
                                <td>0</td>
                                <td>22.9</td>
                                <td>2.4</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="valor_1.html">Siguente</a></li>
                        </ul>
                    </nav><!-- End Basic Pagination -->

                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>


@endsection

@extends('layouts.app')

@section('content')
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
            <div class="row">
                <div class="col-md-12">

                    <div class="widget p-lg">
                        <h4 class="m-b-lg">Estado de perdidas/ganancias | Agente: {{$user->name}} {{$user->last_name}}</h4>
                        <table class="table supervisor-cash-table">
                            <thead>
                                <tr class="visible-lg">
                                    <th>F. Inicio</th>
                                    <th>F. Fin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$ds}}</td>    
                                    <td>{{$de}}</td>
                                </tr>
                            </tbody>
                        </table>

                        <footer class="widget-footer" style="background: #13678A">
                            <p>Ventas Netas: <b class="text-success"> {{$nets}} </b> </p>
                            <p>Valor Prestado: <b class="text-success"> {{$loan}} </b> </p>
                            <p>Ganancias brutas: <b class="text-success"> {{$nets - $loan}}</b> </p>
                            <p>Gastos: <b class="text-success"> {{$bills}} </b></p>
                            <p>Ganancias Netas:<b class="text-success"> {{$nets - $loan - $bills}}</b> </p>

                        </footer>
                    </div><!-- .widget -->

                </div>
            </div><!-- .row -->
        </section>
    </div>
</main>
@endsection

{{-- ESTADO DE PERDIDAS Y GANANCIAS

VENTAS NETAS
(capital+interes)

(-) VALOR PRESTADO
(capital)

= GANANCIAS BRUTAS
(ventas netas - valor prestado)

(-) GASTOS
(gastos)

=GANANCIAS NETAS
(ganancias brutras - gastos) --}}
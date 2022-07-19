@extends('layouts.app')

@section('content')
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget p-lg">
                        <h4 class="m-b-lg">Detalles Clientes y Ventas</h4>
                        <table class="table supervisor-history-table">
                            <thead>
                                <tr class="visible-lg">
                                    <th>Nombres</th>
                                    <th>Credito</th>
                                    <th>Valor</th>
                                    <th>Interés</th>
                                    <th>Saldo</th>
                                    <th>Cuota</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($clients as $client)

                                <tr>
                                    <td><span class="value">{{$client->name}} {{$client->last_name}}</span></td>
                                    <td><span class="value">{{$client->credit_id}}</span></td>
                                    <td><span class="value">{{($client->amount_neto / (1 + $client->utility))}}</span></td>
                                    <td><span class="value">{{($client->amount_neto / (1 + $client->utility)) * $client->utility }}</span></td>
                                    <td><span class="value">{{($client->summary_total)}}</span></td>
                                    
                                    @if($client->payment_current < 1)
                                         <td>{{$client->payment_current}} / {{$client->payment_number}}</td>
                                    @else 
                                         <td>{{floor(($client->amount_neto  - $client->summary_total) / $client->payment_amount)}}  / {{$client->payment_number}} </td>
                                    @endif
                                    
                                    <td>
                                        <a href="{{url('supervisor/menu/history')}}/{{$client->credit_id}}"
                                            class="btn btn-info btn-xs">Ver</a>
                                    </td>
                                </tr>
                                @php
                                    $walletByBill = $walletByBill + ($client->amount_neto / (1 + $client->utility)); //saldo
                                    $utility_total = $utility_total + ($client->amount_neto / (1 + $client->utility)) * $client->utility; //utilidad
                                    $borrowedLoan = $borrowedLoan + $client->summary_total; //valor
                                @endphp
                                @endforeach

                            </tbody>
                        </table>
                        <footer class="widget-footer">
                            <p><b>Valor prestado : </b> <span class="text-primary">{{$walletByBill}}</span>
                            <p><b>Utilidades : </b> <span class="text-primary">{{$utility_total}}</span>
                            <p><b>Falta cobrar : </b> <span class="text-primary">{{$borrowedLoan}}</span>
                            <p><b>Clientes totales </b> <span class="text-primary">{{ count($clients) }}</span></p>
                        </footer>
                    </div><!-- .widget -->
                    {{-- <div class="col-lg-12 text-right">
                        <a href="{{url()->previous()}}" class="btn btn-inverse"><i class="fa fa-arrow-left"></i>
                            Regresar</a>
                    </div> --}}
                </div>
            </div><!-- .row -->
        </section>
    </div>
</main>
@endsection
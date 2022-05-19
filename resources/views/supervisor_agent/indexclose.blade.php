@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Cerrar día Agentes</h4>
                            <table class="table supervisor-close-table">
                                <tbody>
                                    <tr class="visible-lg">
                                        <th>Nombre</th>
                                        <th>Cartera</th>
                                        <th>Fecha</th>
                                        <th>Ciudad</th>
                                        <th>Acción</th>
                                    </tr>
                                   
                                    @php $bool = true @endphp
                                    @foreach($clients as $client)
                                        @if($client->show)
                                         @php $bool = false @endphp
                                            <tr>
                                                <td><span class="value">{{$client->name}} {{$client->last_name}}</span></td>
                                                <td><span class="value">{{$client->wallet_name}}</span></td>
                                                <td><span class="value">{{$today}}</span></td>
                                                <td><span class="value">{{$client->address}}</span></td>
                                                <td>
                                                    <a href="{{url('supervisor/close')}}/{{$client->id_user_agent}}" class="btn btn-danger btn-xs">Cerrar</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    @if($bool)
                                        <tr>
                                            <td></td>
                                            <td>  <h5> No se puede cerrar el día sin antes abrirlo </h5></td>
                                            <td></td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Abrir día Agentes</h4>
                            <table class="table supervisor-close-table">
                                <tbody>
                                <tr class="visible-lg">
                                    <th>Nombre</th>                                    
                                    <th>Fecha</th>
                                    <th>Ciudad</th>
                                    <th>Acción</th>
                                </tr>

                                @foreach($clientsO as $client)                                    
                                        <tr>
                                            <td><span class="value">{{$client->name}} {{$client->last_name}}</span></td>                                            
                                            <td><span class="value">{{$today}}</span></td>
                                            <td><span class="value">{{$client->address}}</span></td>
                                            <td>
                                                <a href="{{url('supervisor/open')}}/{{$client->id_agent}}" class="btn btn-success btn-xs">Abrir</a>
                                            </td>
                                        </tr>
                                @endforeach

                                </tbody></table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection

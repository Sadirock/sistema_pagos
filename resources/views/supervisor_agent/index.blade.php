@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
            <table class="table table-striped table-bordered dt-responsive nowrap client-table">
                {{-- <table  class="table dataTable table-striped table-bordered dt-responsive nowrap" >  --}}
                    <thead>                                    
                        <tr class="visible-lg">
                            <th>Nombre</th>
                            <th>Cartera</th>
                            <th>Pais</th>
                            <th>Ciudad</th>
                            <th>Base</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td><span class="value">{{$client->name}} {{$client->last_name}}</span></td>
                                <td><span class="value">{{$client->wallet_name}}</span></td>
                                <td><span class="value">{{$client->country}}</span></td>
                                <td><span class="value">{{$client->address}}</span></td>
                                <td><span class="value">{{$client->base_total}}</span></td>
                                <td>
                                    <a href="{{url('supervisor/agent')}}/{{$client->id}}/edit" class="btn btn-success btn-xs">Base</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection

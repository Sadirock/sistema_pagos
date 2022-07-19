@extends('layouts.app')

@section('content')
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget p-lg">
                        <h4 class="m-b-lg">Historial asignación de bases</h4>                                                
                        <h4 class="m-b-lg">Fecha selec: {{$data->first()->created_at->toFormattedDateString()}}</h4>                                                
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                            <tr>                                   
                                <th>Nombre</th>
                                <th>Hora</th>
                                <th>Base Asignada</th>
                                <th>Cartera</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $field)
                                <tr id="td_{{$field->id}}">
                                    <td>{{$field->name}}</td>                                   
                                    <td>{{$field->created_at->toTimeString()}}</td>
                                    <td>{{$field->base}}</td>
                                    <td>{{$field->id_wallet}}</td>                                     
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
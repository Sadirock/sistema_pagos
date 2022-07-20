@extends('layouts.app')

@section('subadmin-section')
<script>
    <!-- simulate the script with a mouse click or http redirect -->
    // Simulate a mouse click:
    window.location.href = "admin/user";

    // Simulate an HTTP redirect:
    window.location.replace("admin/user");
</script>
@endsection

@section('admin-section')
<div class="col-md-3 col-sm-6">
    <a href="{{url('admin/user/create')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-success">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Crear usuario</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-user-plus"></i></span>
            </div>
        </div><!-- .widget -->
    </a>
</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('admin/route/create')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-purple">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Crear cartera</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-map-marker"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('admin/user')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-deepOrange">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Listar usuarios</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-list-ol"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
@endsection

@section('agent-section')
<div class="col-md-3 col-sm-6">
    <a href="{{url('client/create')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-warning">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Cliente nuevo</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-user"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('client')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-primary">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Mostrar clientes</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-th-list"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('simulator')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-purple">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Simulador</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-calculator"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('payment')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-success">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Información</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-money"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('route')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-deepOrange">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Iniciar Ruta</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-car"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6 hidden">
    <a href="{{url('history')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-danger">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Historia cierre</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-lock"></i></span>
            </div>
        </div><!-- .widget -->
    </a>
</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('transaction')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-inverse">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Transacciones</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-list-ol"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('bill')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-pink">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Gastos</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-cart-plus"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>

@endsection

@section('supervisor-section')

<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/agent')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-warning">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Asignar base</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-dollar"></i></span>
            </div>
        </div><!-- .widget -->
    </a>
</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/historyBase')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-turk">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Historial de ingresos (Base)</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-dollar"></i></span>
            </div>
        </div><!-- .widget -->
    </a>
</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/close')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-primary">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Cierre/Apertura diaria</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-lock"></i></span>
            </div>
        </div><!-- .widget -->
    </a>
</div>

<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/client')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-purple">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Ver clientes</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-edit"></i></span>
            </div>
        </div><!-- .widget -->
    </a>
</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/tracker')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-success">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Rastro agente</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-search"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/review/create')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-deepOrange">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Revision cartera</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-eye"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/statistics')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-danger">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Estadistica</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-line-chart"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/cash')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-inverse">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Caja</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-bars"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-3 col-sm-6">
    <a href="{{url('supervisor/bill/create')}}">
        <div class="widget stats-widget">
            <div class="widget-body clearfix bg-pink">
                <div class="pull-left">
                    <h3 class="widget-title text-white">Gastos</h3>
                </div>
                <span class="pull-right big-icon watermark"><i class="fa fa-cart-plus"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>

@endsection

@section('agent-resume')
<div class="col-12 pb-2">
    <small>Los montos siguientes son el total del día actual</small>
</div>
<div class="col-md-4 col-sm-6">
    <a href="{{url('history')}}">
        <div class="widget stats-widget widget-resume">
            <div class="widget-body clearfix h-100 bg-white">
                <div class="pull-left">
                    <h3 class="widget-title text-dark">DISPONIBLE (CAJA)</h3>
                    <h3 class="widget-title text-{{$color}}">
                        <b>{{$base_agent - $total_bill}}</b>
                        @if($total_summary>0)
                            <span>+</span>
                            <span class=""> {{$total_summary}}</span>
                            <span class="text-success">= {{($base_agent - $total_bill) + $total_summary}}</span>
                        @endif
                    </h3>
                </div>
                <span class="pull-right big-icon text-danger watermark"><i class="fa fa-arrow-down"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-4 col-sm-6">
    <a href="{{url('transaction')}}">
        <div class="widget stats-widget widget-resume">
            <div class="widget-body h-100 clearfix bg-white">
                <div class="pull-left">
                    <h3 class="widget-title text-dark">RECAUDADO</h3>
                    <h3 class="widget-title text-dark"><b>{{$total_summary}}</b></h3>
                </div>
                <span class="pull-right big-icon text-success watermark"><i class="fa fa-arrow-up"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="col-md-4 col-sm-6">
    <a href="{{url('bill')}}">
        <div class="widget stats-widget widget-resume">
            <div class="widget-body h-100 clearfix bg-white">
                <div class="pull-left">
                    <h3 class="widget-title text-dark">GASTOS</h3>
                    <h3 class="widget-title text-dark"><b>{{$total_bill}}</b></h3>
                </div>
                <span class="pull-right big-icon text-warning watermark"><i class="fa fa-arrow-right"></i></span>
            </div>
        </div><!-- .widget -->
    </a>

</div>
<div class="clearfix"></div>
<div class="row m-0 d-block col-12 pb-4">
    <hr>
</div>
@endsection

@section('content')
<main id="app-main" class="app-main in">
    <div class="close-wrapper"></div>
    <div class="wrap">
        @if(!$close_day && !$open_day)
        <section class="app-content">
            @if(in_array(Auth::user()->level,['agent']))
            <div class="row">
                @yield('agent-resume')
                @yield('agent-section')
            </div>

            @elseif(in_array(Auth::user()->level,['supervisor']))
            <div class="row">
                @yield('supervisor-section')
            </div>

            @elseif(in_array(Auth::user()->level,['admin']))
            <div class="row">
                <div class="col-12 row m-0 p-0">
                    @yield('admin-section')
                    <hr>
                </div>
            </div>

            @elseif(in_array(Auth::user()->level,['subadmin']))
            <div class="row">
                <div class="col-12 row m-0 p-0">
                    @yield('subadmin-section')
                    <hr>
            </div>

            @else
            <div>No tienes permisos</div>
            @endif
        </section>
        @else
            @if($open_day)
                <section class="app-content">
                    <div class="col-12 text-center p-4">
                        <h3>Aún no se ha habilitado el día, comuníquese con su Supervisor para que le habilite el sistema</h3>
                    </div>
                </section>
            @elseif($close_day)
                <section class="app-content">
                    <div class="col-12 text-center p-4">
                        <b>Cierre del día realizado. Vuelve mañana</b>
                    </div>
                </section>        
            @endif
        @endif

    </div>

</main>
@endsection
@extends('layouts.app')
@section('content')
<div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>¡Atención!</strong> {{ $message}}
 </div>'
@endsection
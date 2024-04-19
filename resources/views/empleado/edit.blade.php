@extends('layouts.app')

@section('content')
<div class="container">
Formulario de edicion de empleado
<form action="{{url('/empleado/'.$empleado->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('empleado.form', ['modo' => 'Editar'])

</form>

</div>

@endSection
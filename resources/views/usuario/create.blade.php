@extends('layouts.admin')

@section('content')

       @include('alerts.request')

        {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
                @include('usuario.forms.usr')

                {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}


<!-- <form action="store" method="POST">
    <div class="form-group">
        <label for="">Nombre</label>
        <input name="name" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Correo</label>
        <input name="email" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input name="password" type="password" class="form-control">
    </div>
    <button class="btn btn-success">Registrar</button>
</form> -->

@stop
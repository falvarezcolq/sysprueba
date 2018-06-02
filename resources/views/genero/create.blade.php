@extends('layouts.admin')

@section('content')
    {!! Form::open()!!}
        <div id="msj-success" class="alert alert-success alert-dismikssible" role="alert"  style="display:none">
            <strong>Género agregado</strong>
        </div>
        <div id="msj-error" class="alert alert-danger alert-dismikssible" role="alert"  style="display:none">
            <strong id="msj-error-text"></strong>
        </div>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
        @include('genero.form.genero')
        {!! link_to('#', $title ='Registrar' , $attributes = ['id'=> 'registro' ,'class' => 'btn btn-primary'] , $secure=null)!!}

    {!! Form::close()!!}
@endsection 


@section('scripts')
{!!Html::script('js/script.js')!!}
@endsection
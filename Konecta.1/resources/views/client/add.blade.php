@extends('layouts.base')

@section('title', 'Añadir cliente')

@section('content')
    <div class="register add">
        <h1>Añadir cliente</h1>
        {!! Form::open(['route' => 'client.store', 'method' => 'post']) !!}
            {!! Form::text('nombre', null, ['autocomplete' => 'off', 'placeholder' => 'Nombre del cliente','required']) !!}
            {!! Form::text('documento', null, ['autocomplete' => 'off', 'placeholder' => 'Documento de identidad','required']) !!}
            {!! Form::text('email', null, ['autocomplete' => 'off', 'placeholder' => 'Correo electrónico','required']) !!}
            {!! Form::text('direccion', null, ['autocomplete' => 'off', 'placeholder' => 'Dirección','required']) !!}
            {!! Form::submit('Añadir', ['class' => 'other']) !!}
        {!! Form::close() !!}
    </div>
    {!! $errors->first('nombre', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('documento', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('email', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('direccion', '<div class="message in-register"><p>:message</p></div>') !!}
@endsection
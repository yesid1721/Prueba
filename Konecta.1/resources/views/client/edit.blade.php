@extends('layouts.base')

@section('title', 'Editar cliente')

@section('content')
    <div class="register">
        <h1>Editar cliente</h1>
        {!! Form::model($cliente,['route' => ['client.update', $cliente->id], 'method' => 'put']) !!}
            {!! Form::text('nombre', null, ['autocomplete' => 'off', 'placeholder' => 'Nombre del cliente','required']) !!}
            {!! Form::text('documento', null, ['autocomplete' => 'off', 'placeholder' => 'Documento de identidad','required']) !!}
            {!! Form::text('email', null, ['autocomplete' => 'off', 'placeholder' => 'Correo electrónico','required']) !!}
            {!! Form::text('direccion', null, ['autocomplete' => 'off', 'placeholder' => 'Dirección','required']) !!}
            {!! Form::submit('Editar', ['class' => 'other']) !!}
        {!! Form::close() !!}
        {!! Form::open(['route' => ['client.destroy', $cliente->id], 'method' => 'delete']) !!}
            {!! Form::submit('Eliminar', ['class' => 'delete']) !!}
        {!! Form::close() !!}
    </div>
    {!! $errors->first('nombre', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('documento', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('email', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('direccion', '<div class="message in-register"><p>:message</p></div>') !!}
@endsection
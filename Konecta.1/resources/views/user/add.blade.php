@extends('layouts.base')

@section('title', 'Añadir usuario')

@section('content')
    <div class="register add">
        <h1>Añadir usuario</h1>
        {!! Form::open(['route' => 'user.store', 'method' => 'post']) !!}
            {!! Form::text('name', null, ['autocomplete' => 'off', 'placeholder' => 'Nombre','required']) !!}
            {!! Form::text('email', null, ['autocomplete' => 'off', 'placeholder' => 'Correo electrónico','required']) !!}
            {!! Form::select('rol', ['0' => 'Administrador', '1' => 'Vendedor'], '1') !!}
            {!! Form::password('password', ['placeholder' => 'Contraseña','required']) !!}
            {!! Form::submit('Añadir', ['class' => 'other']) !!}
        {!! Form::close() !!}
    </div>
    {!! $errors->first('name', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('email', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('password', '<div class="message in-register"><p>:message</p></div>') !!}
@endsection
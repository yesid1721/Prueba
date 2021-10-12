@extends('layouts.base')

@section('title', 'Editar usuario')

@section('content')
    <div class="register">
        <h1>Editar Usuario</h1>
        {!! Form::model($user,['route' => ['user.update', $user->id], 'method' => 'put']) !!}
            {!! Form::text('name', null, ['autocomplete' => 'off', 'placeholder' => 'Nombre','required']) !!}
            {!! Form::text('email', null, ['autocomplete' => 'off', 'placeholder' => 'Correo electrónico','required']) !!}
            {!! Form::select('rol', ['0' => 'Administrador', '1' => 'Vendedor']) !!}
            {!! Form::password('password', ['placeholder' => 'Contraseña']) !!}
            {!! Form::submit('Editar', ['class' => 'other']) !!}
        {!! Form::close() !!}
        {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Eliminar', ['class' => 'delete']) !!}
        {!! Form::close() !!}
    </div>
    {!! $errors->first('name', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('email', '<div class="message in-register"><p>:message</p></div>') !!}
    {!! $errors->first('password', '<div class="message in-register"><p>:message</p></div>') !!}
@endsection
@extends('layouts.base')

@section('title', 'Inciar sesión')

@section('content')
    <div class="login">
        <h1>Iniciar sesión</h1>
        {!! Form::open(['route' => 'user.login']) !!}
            <div class="wrapper">
                {!! Form::open(['route' => 'user.login']) !!}
                <i class="fas fa-user input-icon"></i>
                {{ Form::text('email', null, ['placeholder' => "Correo electrónico",'required']) }}
            </div>

            <div class="wrapper">
                <i class="fas fa-lock input-icon"></i>
                {!! Form::password('password', ['autocomplete' => "off", 'placeholder' => "Contraseña",'required']) !!}
            </div>

            {!! Form::submit('Iniciar sesión', ['class' => 'other']) !!}
        {!! Form::close() !!}
    </div>

    {!! $errors->first('password', '<div class="message"><p>:message</p></div>') !!}
    {!! $errors->first('email', '<div class="message"><p>:message</p></div>') !!}
    
@endsection
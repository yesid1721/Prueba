@extends('layouts.base')

@section('title', 'Usuarios')

@section('content')
    <div class="info">
        <h1>Usuarios</h1>
        <input type="text" id="textSearch" name="search" value="" placeholder="Búsqueda...">
        @if(count($users) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Rol</th>
                    @if(Auth::check())
                        <th>Edición</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->rol == '0')
                        Administrador
                        @elseif($user->rol == '1')
                        Vendedor
                        @endif
                    </td>
                    @if(Auth::check())
                        <td>{!! link_to_route('user.edit', $title = 'Editar', $parameters = $user->id) !!}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @else 
        <div class="message in-info">
            <p>En este momento no hay usuarios registrados.</p>
        </div>
        @endif
    </div>
@endsection
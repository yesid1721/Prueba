@extends('layouts.base')

@section('title', 'Clientes')

@section('content')
<div class="info">
    <h1>Clientes</h1>
    <input type="text" id="textSearch" name="search" value="" placeholder="Búsqueda...">
    @if(count($clientes) > 0)
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Correo electrónico</th>
                <th>Dirección</th>
                @if(Auth::check())
                    <th>Edición</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->documento}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->direccion}}</td>
                @if(Auth::check())
                    <td>{!! link_to_route('client.edit', $title = 'Editar', $parameters = $cliente->id) !!}</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    @else 
    <div class="message in-info">
        <p>En este momento no hay clientes registrados.</p>
    </div>
    @endif
</div>



@endsection
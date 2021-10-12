<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientStoreRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::All();
        return view('client.index', compact('clientes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {
        $cliente = new Cliente;

        $cliente->nombre = $request->nombre;
        $cliente->documento = $request->documento;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;

        $cliente->save();

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('client.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required|string',
            'documento' => 'required|numeric|unique:clientes,documento,' . $id,
            'email' => 'required|email|unique:clientes,email,' . $id,
            'direccion' => 'required'
        ]);

        $cliente = Cliente::find($id);

        $cliente->nombre = $request->nombre;
        $cliente->documento = $request->documento;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;

        $cliente->save();

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect()->route('client.index');
    }
}

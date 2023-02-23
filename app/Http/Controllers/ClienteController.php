<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Clientes = Cliente::latest()->paginate(5);

        return view('clientes.index',compact('clientes'))
            ->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'empresa' => 'required',
           'numeroFiscal' => 'required',
           'documentoIdentidad' => 'required',
           'razonSocial' => 'required',
           'razonSocial' => 'required',
           'nombres' => 'required',
           'apellidos' => 'required',
           'direccion' => 'required',
           'ciudad' => 'required',
           'departamento' => 'required',
           'telefono' => 'required',
           'geolocation' => 'required',
           'email' => 'required',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success'.'Cliente creado exitosamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente): Response
    {
        return view('clientes.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente): RedirectResponse
    {
        $request->validate([
           'empresa' => 'required',
           'numeroFiscal' => 'required',
           'documentoIdentidad' => 'required',
           'razonSocial' => 'required',
           'razonSocial' => 'required',
           'nombres' => 'required',
           'apellidos' => 'required',
           'direccion' => 'required',
           'ciudad' => 'required',
           'departamento' => 'required',
           'telefono' => 'required',
           'geolocation' => 'required',
           'email' => 'required',
        ]);

        $Cliente->update($request->all());
        return redirect()->route('clientes.index')
                        ->with('success','Cliente Actualizado correctamente');

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente): RedirectResponse
    {
        $cliente->delete();
       
        return redirect()->route('clientes.index')
                        ->with('success','Cliente eliminado satisfactoriamente');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Recinto;
use Illuminate\Http\Request;

class RecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recintos = Recinto::get();

        return view('recintos.index', ['recintos' => $recintos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recintos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request-> validate([
            'nombre' => ['required'],
            'direccion' => ['required'],
            'superficie' => ['required'],
        ]);

        $recinto = new Recinto;
        $recinto->nombre = $request->input('nombre');
        $recinto->direccion = $request->input('direccion');
        $recinto->superficie = $request->input('superficie');
        $recinto->save();
        
        session()->flash('status', 'Recinto Agregado');

        return to_route('recinto.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Recinto $recinto)
    {
        return view('recintos.show', ['recinto'=> $recinto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

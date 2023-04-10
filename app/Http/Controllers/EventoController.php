<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Recinto;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::get();
        
        return view('eventos.index', ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $recintos = Recinto::get();
        $imagenes = Imagen::get();

        return view('eventos.create', ['recintos' => $recintos, 'imagenes' => $imagenes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request -> validate([
            'nombre' => ['required'],
            'fecha' => ['required'],
            'recinto_id' => ['required'],
            'descripcion' => ['required'],
            'precio' => ['required'],
            'aforo' => ['required'],
            'imagen_id' => ['required'],
            
        ]);

        Evento::create($validated);

        session()->flash('status', 'Evento Creado!');

        return to_route('eventos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        return view('eventos.show', ['evento' => $evento]);
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

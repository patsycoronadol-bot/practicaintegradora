<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Mostrar todos los eventos.
     */
    public function index()
    {
        $eventos = Evento::all();

        return response()->json([
            'eventos' => $eventos,
            'status' => 200
        ], 200);
    }

    /**
     * Crear un nuevo evento.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        $evento = Evento::create($request->all());

        return response()->json([
            'evento' => $evento,
            'status' => 201
        ], 201);
    }

    /**
     * Mostrar un evento específico.
     */
    public function show(Evento $evento)
    {
        return response()->json([
            'evento' => $evento,
            'status' => 200
        ], 200);
    }

    /**
     * Actualizar un evento.
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'fecha_inicio' => 'sometimes|required|date',
            'fecha_fin' => 'sometimes|required|date',
        ]);

        $evento->update($request->all());

        return response()->json([
            'evento' => $evento,
            'status' => 200
        ], 200);
    }

    /**
     * Eliminar un evento.
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();

        return response()->json([
            'message' => 'Evento eliminado correctamente',
            'status' => 200
        ], 200);
    }
}

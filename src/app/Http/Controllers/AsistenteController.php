<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use Illuminate\Http\Request;

class AsistenteController extends Controller
{
    public function index()
    {
        $asistentes = Asistente::all();

        return response()->json([
            'asistentes' => $asistentes,
            'status' => 200
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'nullable|string|max:20',
            'evento_id' => 'required|exists:eventos,id',
        ]);

        $asistente = Asistente::create($request->all());

        return response()->json([
            'asistente' => $asistente,
            'status' => 201
        ], 201);
    }

    public function show(Asistente $asistente)
    {
        return response()->json([
            'asistente' => $asistente,
            'status' => 200
        ], 200);
    }

    public function update(Request $request, Asistente $asistente)
    {
        $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email',
            'telefono' => 'nullable|string|max:20',
            'evento_id' => 'sometimes|required|exists:eventos,id',
        ]);

        $asistente->update($request->all());

        return response()->json([
            'asistente' => $asistente,
            'status' => 200
        ], 200);
    }

    public function destroy(Asistente $asistente)
    {
        $asistente->delete();

        return response()->json([
            'message' => 'Asistente eliminado correctamente',
            'status' => 200
        ], 200);
    }
}
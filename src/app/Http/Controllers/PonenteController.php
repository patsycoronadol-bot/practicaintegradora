<?php

namespace App\Http\Controllers;

use App\Models\Ponente;
use Illuminate\Http\Request;

class PonenteController extends Controller
{
    public function index()
    {
        $ponentes = Ponente::all();

        return response()->json([
            'ponentes' => $ponentes,
            'status' => 200
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'biografia' => 'nullable|string',
            'especialidad' => 'nullable|string|max:255',
        ]);

        $ponente = Ponente::create($request->all());

        return response()->json([
            'ponente' => $ponente,
            'status' => 201
        ], 201);
    }

    public function show(Ponente $ponente)
    {
        return response()->json([
            'ponente' => $ponente,
            'status' => 200
        ], 200);
    }

    public function update(Request $request, Ponente $ponente)
    {
        $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'biografia' => 'nullable|string',
            'especialidad' => 'nullable|string|max:255',
        ]);

        $ponente->update($request->all());

        return response()->json([
            'ponente' => $ponente,
            'status' => 200
        ], 200);
    }

    public function destroy(Ponente $ponente)
    {
        $ponente->delete();

        return response()->json([
            'message' => 'Ponente eliminado correctamente',
            'status' => 200
        ], 200);
    }
}
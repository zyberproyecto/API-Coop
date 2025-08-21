<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HorasTrabajadas;
use Illuminate\Http\Request;

class HorasTrabajadasController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'fecha' => 'required|date',
            'horas' => 'required|numeric|min:1',
            'descripcion' => 'nullable|string'
        ]);

        $hora = HorasTrabajadas::create($data);

        return response()->json([
            'message' => 'Horas de trabajo registradas correctamente',
            'data' => $hora
        ], 201);
    }
}


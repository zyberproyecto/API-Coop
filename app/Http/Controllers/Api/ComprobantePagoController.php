<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ComprobantePago;
use Illuminate\Http\Request;

class ComprobantePagoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'monto' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'archivo' => 'required|file|mimes:jpg,png,pdf|max:2048'
        ]);

        // Guardar archivo
        $path = $request->file('archivo')->store('comprobantes', 'public');
        $data['archivo'] = $path;

        $comprobante = ComprobantePago::create($data);

        return response()->json([
            'message' => 'Comprobante recibido correctamente',
            'data' => $comprobante
        ], 201);
    }
}


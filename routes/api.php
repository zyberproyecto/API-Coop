<?php

use App\Http\Controllers\Api\HorasTrabajadasController;
use App\Http\Controllers\Api\ComprobantePagoController;

Route::post('/horas-trabajadas', [HorasTrabajadasController::class, 'store']);
Route::post('/comprobantes-pago', [ComprobantePagoController::class, 'store']);

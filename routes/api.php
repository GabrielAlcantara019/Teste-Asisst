<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EquipamentoController;

Route::prefix('equipamento')->group(function () {
    Route::get('retorna', [EquipamentoController::class, 'index'])->name('equipamento.index');
    Route::post('cadastra', [EquipamentoController::class, 'create'])->name('equipamento.create');
    Route::put('{id}/atualiza', [EquipamentoController::class, 'update'])->name('equipamento.update');
    Route::delete('{id}/exclui', [EquipamentoController::class, 'destroy'])->name('equipamento.destroy');
});
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlarmeController;
use App\Http\Controllers\EquipamentoController;

Route::prefix('equipamento')->group(function () {
    Route::get('retorna', [EquipamentoController::class, 'index'])->name('equipamento.index');
    Route::post('cadastra', [EquipamentoController::class, 'create'])->name('equipamento.create');
    Route::put('{id}/atualiza', [EquipamentoController::class, 'update'])->name('equipamento.update');
    Route::delete('{id}/exclui', [EquipamentoController::class, 'destroy'])->name('equipamento.destroy');
});

Route::prefix('alarme')->group(function () {
    Route::get('retorna', [AlarmeController::class, 'index'])->name('alarme.index');
    Route::post('cadastra', [AlarmeController::class, 'create'])->name('alarme.create');
    Route::put('{id}/atualiza', [AlarmeController::class, 'update'])->name('alarme.update');
    Route::delete('{id}/exclui', [AlarmeController::class, 'destroy'])->name('alarme.destroy');
});
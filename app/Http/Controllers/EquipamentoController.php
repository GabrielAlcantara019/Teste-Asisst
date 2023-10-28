<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Http\Controllers\Controller;
use App\Http\Requests\EquipamentoRequest;

class EquipamentoController extends Controller
{
    public function index()
    {
        $equipamentos = Equipamento::all();
        return response()->json(['equipamentos' => $equipamentos], 200);
    }

    public function create(EquipamentoRequest $request)
    {
        $data = $request->validated();

        // Verificar se já existe um equipamento com o mesmo número de série
        $existingEquipamento = Equipamento::where('numero_serie', $data['numero_serie'])->first();

        if ($existingEquipamento) {
            return response()->json([
                'mensagem' => 'Já existe um equipamento com o mesmo número de série.'
            ], 422);
        }

        $equipamento = Equipamento::create($data);

        return response()->json([
            'mensagem' => 'Equipamento registrado com sucesso',
            'equipamento' => $equipamento
        ], 200);
    }

    public function update(EquipamentoRequest $request, $id)
    {
        $data = $request->validated();

        $equipamento = Equipamento::find($id);

        if (!$equipamento) {
            return response()->json([
                'message' => 'Equipamento não encontrado'
            ], 404);
        }

        $equipamento->update($data);

        return response()->json([
            'mensagem' => 'Equipamento editado com sucesso',
            'equipamento' => $equipamento
        ], 200);
    }

    public function destroy($id)
    {
        $equipamento = Equipamento::find($id);

        if (!$equipamento) {
            return response()->json([
                'message' => 'Equipamento não encontrado'
            ], 404);
        }
        $equipamento->delete();

        return response()->json(['message' => 'Equipamento excluído com sucesso'], 200);
    }
}
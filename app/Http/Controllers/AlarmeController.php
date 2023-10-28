<?php

namespace App\Http\Controllers;

use App\Models\Alarme;
use App\Http\Controllers\Controller;
use App\Http\Requests\AlarmeRequest;

class AlarmeController extends Controller
{
    public function index()
    {
        $alarmes = Alarme::all();
        return response()->json(['alarmes' => $alarmes], 200);
    }

    public function create(AlarmeRequest $request)
    {
        $data = $request->validated();

        $alarme = Alarme::create($data);

        return response()->json([
            'mensagem' => 'Alarmes registrado com sucesso',
            'alarme' => $alarme
        ], 200);
    }

    public function update(AlarmeRequest $request, $id)
    {
        $data = $request->validated();

        $alarme = Alarme::find($id);

        if (!$alarme) {
            return response()->json([
                'message' => 'Alarmes não encontrado'
            ], 404);
        }

        $alarme->update($data);

        return response()->json([
            'mensagem' => 'Alarmes editado com sucesso',
            'alarme' => $alarme
        ], 200);
    }

    public function destroy($id)
    {
        $alarme = Alarme::find($id);

        if (!$alarme) {
            return response()->json([
                'message' => 'Alarmes não encontrado'
            ], 404);
        }
        $alarme->delete();

        return response()->json(['message' => 'Alarme excluído com sucesso'], 200);
    }
}

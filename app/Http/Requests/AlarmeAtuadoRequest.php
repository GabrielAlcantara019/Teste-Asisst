<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlarmeAtuadoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'id_alarme' => 'required|exists:alarme,id_alarme',
        'entrada' => 'required|date',
        'saida' => 'nullable|date|after:entrada',
        'status' => 'required|string',
        'descricao_alarme' => 'required|string',
        'descricao_equipamento' => 'required|string',
        ];
    }
}

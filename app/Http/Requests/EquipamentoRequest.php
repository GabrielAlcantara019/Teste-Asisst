<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipamentoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'numero_serie' => 'required|string|max:255',
            'tipo' => 'required|in:Tensão,Corrente,Óleo'
        ];
    }
}

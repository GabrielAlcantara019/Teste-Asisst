<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlarmeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_equipamento' => 'required|integer',
            'descricao' => 'required|string|max:255',
            'classificacao' => 'required|in:Urgente,Emergente,Ordinário'
        ];
    }
}
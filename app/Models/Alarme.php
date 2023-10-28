<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alarme extends Model
{
    use HasFactory;

    protected $fillable = ['id_alarme', 'id_equipamento', 'descricao', 'classificacao'];

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class, 'id_equipamento', 'id_equipamento');
    }
}
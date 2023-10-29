<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlarmeAtuado extends Model
{
    use HasFactory;

    protected $fillable = [
        'alarme_id',
        'entrada',
        'saida',
        'status',
        'descricao_alarme',
        'descricao_equipamento',
    ];

    public function alarme()
    {
        return $this->belongsTo(Alarme::class, 'id_alarme');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $fillable = ['id_equipamento', 'nome', 'numero_serie', 'tipo'];

    public function alarmes()
    {
        return $this->hasMany(Alarme::class, 'id_equipamento', 'id_equipamento');
    }
}
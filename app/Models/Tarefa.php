<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;


    protected $fillable = [
        'usuario_id',
        'descricao',
        'status',
        'cadastrado',
        'alterado'

    ];
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}

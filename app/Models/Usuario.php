<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'cadastrado', 'alterado'
    ];

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
    public  function relacaos()
    {
        return $this->belongsToMany(relacao::class);
    }
}

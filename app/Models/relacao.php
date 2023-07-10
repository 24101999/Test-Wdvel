<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'relacao'
    ];

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class);
    }
}

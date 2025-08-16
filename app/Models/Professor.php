<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'senha',
        'email',
        'telefone',
        'data_nascimento' // Adicione se você implementou o relacionamento com User
    ];
}

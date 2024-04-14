<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direcao extends Model
{
    protected $fillable = [
        'Nome', 'CPF', 'data_nascimento', 'email'
    ];

    public static $rules = [
        'CPF' => 'required|cpf|unique:direcaos,CPF|max:14',
        'email' => 'required|email|unique:direcaos,email|max:255',
    ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    const CREATED_AT = 'datacriacao';
    const UPDATED_AT = 'dataupdate';

    protected $fillable = [
        'nomedocurso',
        'qntmax',
        'descricao',
        'categoria',
        'mensalidade',
        'status'
    ];
}
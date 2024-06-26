<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'enderecos'; // Nome da tabela

    protected $fillable = [
        'idPessoa',
        'provincia',
        'municipio',
        'bairro',
        'zona',
        'quarteirao',
        'rua',
        'casa',
    ];
}

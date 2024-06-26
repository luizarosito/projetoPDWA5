<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trilhas extends Model
{
    use HasFactory;
    protected $fillable = ['descrição', 'data_saida', 'data_retorno', 'preço', 'descrição', 'status' ];
}

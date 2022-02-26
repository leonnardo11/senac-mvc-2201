<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['id', 'nome', 'descricao', 'preco'];
    protected $table = 'Produtos';
    use HasFactory;
}

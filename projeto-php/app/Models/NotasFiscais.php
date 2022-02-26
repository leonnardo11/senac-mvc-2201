<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotasFiscais extends Model
{
    protected $fillable = ['id', 'venda_id', 'valor', 'imposto'];
    protected $table = 'NotasFiscais';
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'cadastro_id', 'nome do vendedor','qtd de pecas vendidas','data de saida','forma de pagamento','total a pagar'];


    public function cadastro() {
    

        return $this->hasMany(Cadastro::class);
    }
    

}

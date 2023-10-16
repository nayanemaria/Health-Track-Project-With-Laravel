<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastros extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nome', 'email', 'telefone', 'mensagem', 'peso', 'altura',
    ];

    public function calcularIMC()
    {
        if ($this->peso && $this->altura) {
            $imc = $this->peso / ($this->altura * $this->altura);
            return number_format($imc, 2);
        }

        return null;
    }
    
}

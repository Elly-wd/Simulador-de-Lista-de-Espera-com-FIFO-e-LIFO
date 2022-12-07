<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscritos extends Model
{
    public function lerInscritos()
    {
        $totalDeinscritos = Inscritos::select(
            "SELECT inscritos from lista_de_espera"
        );

        echo $totalDeinscritos;
        return $totalDeinscritos;
    }
}

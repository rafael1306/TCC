<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;
    protected $table = 'atividade';
    public $timestamps = false;

    public function getNivelTxt()
    {
        $txt = "";

        switch ($this->nivel) {
            case 1: $txt = "Muito Fácil"; break;
            case 2: $txt = "Fácil"; break;
            case 3: $txt = "Médio"; break;
            case 4: $txt = "Difícil"; break;
            case 5: $txt = "Muito Difícil"; break;
        }

        return $txt;
    }
}

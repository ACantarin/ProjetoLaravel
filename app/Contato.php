<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista() {
        return (object) [
            "nome"=>"André",
            "telefone"=>"9 8433-6645"
        ];
    }
}

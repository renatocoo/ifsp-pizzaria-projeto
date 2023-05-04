<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//models podem ser usados de duas maneiras:
//1. como coordenadores de ações diversas; neste caso usaremos o prefixo "Model"
//2. como Objetos de acesso ao BD; neste caso não usaremos este prefixo"


class LoginModel extends Model
{
    function signUserIn($data) {
        unset($data['_token']); //processamento
        return $data;
    }
}

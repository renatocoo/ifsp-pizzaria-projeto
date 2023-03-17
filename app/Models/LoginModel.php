<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Models podem ser usados de duas maneiras:
//1. Como coordenadores de ações diversas; neste caso usaremos o prefixo "Model"
//2. Como objetos de acesso ao BD; neste caso não usaremos este prefixo.

class LoginModel extends Model {

    function signUserIn($data) {
        
    }
    
}

<?php

namespace App\Helpers;

class ArrayHelper {
    
    //Array que contem dados de teste (fake data)

    private $data = [
        ['nome' => 'Maria', 'snome' => 'Silva', 'idade' => '18', 'insta' => '@mary'],
        ['nome' => 'Joana', 'snome' => 'Santos', 'idade' => '18', 'insta' => '@jo'],
        ['nome' => 'Elza', 'snome' => 'Lima', 'idade' => '18', 'insta' => '@elzy'],
        ['nome' => 'Lilian', 'snome' => 'Sales', 'idade' => '18', 'insta' => '@lilica'],
        ['nome' => 'Edna', 'snome' => 'Souza', 'idade' => '18', 'insta' => '@dina']
    ];

    private $cols = ['Nome', 'Sobrenome', 'Idade', 'Insta'];

    //Lógica de acesso para proteger os dados do objeto
    //Encapsulamento 
    public function getData() {
        return [$this->cols, $this->data];
    }

}



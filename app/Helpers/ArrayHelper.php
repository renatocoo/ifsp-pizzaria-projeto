<?php

namespace App\Helpers;

class ArrayHelper {
    
    //Array que contem dados de teste (fake data)

    private $data = [
        ['nome' => 'Maria', 'snome' => 'Silva', 'insta' => '@mary'],
        ['nome' => 'Joana', 'snome' => 'Santos', 'insta' => '@jo'],
        ['nome' => 'Elza', 'snome' => 'Lima', 'insta' => '@elzy'],
        ['nome' => 'Lilian', 'snome' => 'Sales', 'insta' => '@lilica'],
        ['nome' => 'Edna', 'snome' => 'Souza', 'insta' => '@dina']
    ];

    //Lógica de acesso para proteger os dados do objeto
    //Encapsulamento 
    public function getData() {
        //Lógica de acesso...
        return $this->data;
    }

    public function setData() {
            $this->data['nome'] = '';
            $this->data['snome'] = '';
            $this->data['insta'] = '';
    }
}



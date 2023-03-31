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
    public function getData() 
    {
        return [$this->cols, $this->data];
    }

    public function getClientPhotos()
    {
        $html ='';
        $listaCards = '';

        for ($i=0; $i < 12; $i++) { 
           $html = $this->getCard();
        }

        return ['cards' => $html];
    }

    private function getCard()
    {
        $html = '
        <div class="card">

            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.webp" alt="Card image cap">

            <div class="card-body">

                <h4 class="card-title"><a>Card title</a></h4>

                <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the cards
                    content.</p>

                <a href="#" class="btn btn-primary">Button</a>

            </div>

        </div>'
;
        return $html;
    }

    private function getAvatar($index) {
        $index = $index > 33 ? 33 : ($index < 1 ? 1 : $index);
        return "https://mdbootstrap.com/img/Photos/Avatars/img%20%28$index%29.webp";
    }
}

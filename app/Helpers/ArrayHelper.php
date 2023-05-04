<?php


namespace App\Helpers; //pacotes
use App\Components\ProfileCard;

class ArrayHelper {

    /* Array que contem dados de teste (fake data) */

    private $data = [
        ['nome' => 'Maria',
        'snome' => 'Silva',
        'insta' => '@mary',
        'idade' => 18
        ],
        ['nome' => 'Joana',
        'snome' => 'Santos',
        'insta' => '@joSantos',
        'idade' => 18
        ],
        ['nome' => 'Elza',
        'snome' => 'Lima',
        'insta' => '@ezlima',
        'idade' => 18
        ],
        ['nome' => 'Lilian',
        'snome' => 'Sales',
        'insta' => '@lily',
        'idade' => 18
        ],
        ['nome' => 'Edna',
        'snome' => 'Souza',
        'insta' => '@elsa',
        'idade' => 18
        ],
    ];

    private $cols = ['Nome', 'Sobrenome', 'Insta', 'Idade',];

    //logica de acesso para proteger os dados do objeto
    //encapsulamento (getters || setters)
    public function getData() {
        //lógica de acesso
        return [$this->cols, $this->data];
    }

    public function getClientPhotos()
    {
        $profile = new ProfileCard();

        $html = '';

        for ($i = 1; $i <= 12; $i++) {
            $html .= $profile->getCard($i+15);
        }

        return ['cards' => $html];
    }   
}
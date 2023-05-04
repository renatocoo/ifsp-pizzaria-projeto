<?php


namespace App\Components; //pacotes

class ProfileCard {

    //atributos de classe
    private $imgNumber;

    //construtor em PHP é sempre o mesmo
    function __construct($imgNumber = 0){
        $this->imgNumber = $imgNumber;
    }

    //método público para acesso externo
    public function getCard($index){
        $html = '
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="card mt-3">
                    <img class="card-img-top" src="'.$this->getAvatar($index).'" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><a>Card title</a></h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards
                        content.</p>
                        <a href="#" class="btn btn-primary">Profile '.$index.'</a>
                    </div>  
                </div>
            </div>
        ';
        return $html;
    }

    //metodo privado para acesso interno(encapsulamento)
    private function getAvatar($index) {
        $index = $index > 33 ? 33 : ($index < 1 ? 1 : $index);
        return "https://mdbootstrap.com/img/Photos/Avatars/img%20%28$index%29.webp";
    }

}
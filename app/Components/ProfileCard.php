<?php
namespace App\Components;

class ProfileCard
{

    // atribu
    private $imgNumber;

    function __contruct($imgNumber = 0) 
    {
        $this->imgNumber = $imgNumber;
    }

    public function getCard($index)
    {
        $html = '
        <div class="col-lg-2 col-md-3 col-sm-4 mt-3">
            <div class="card">

                <img class="card-img-top" src="'.$this->getAvatar($index).'" alt="Card image cap">

                <div class="card-body">

                    <h4 class="card-title"><a>Card title</a></h4>

                    <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the cards
                        content.</p>

                    <a href="#" class="btn btn-primary">Button</a>

                </div>

            </div>
        </div>'
;
        return $html;
    }

    // acesso interno (encapsulamento)
    private function getAvatar($index) {
        $index = $index > 33 ? 33 : ($index < 1 ? 1 : $index);
        return "https://mdbootstrap.com/img/Photos/Avatars/img%20%28$index%29.webp";
    }
}

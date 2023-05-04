<?php
namespace App\Helpers;
use App\Helpers;

class PostHelper extends DateTimeHelper {

    // Retorna o nome do autor de um post junto com a data de criação
    public static function postAuthor($author, $date){
        $data = parent::UStoBRDate($date);
        return "Criado por $author em: $data";

    }

}
?>
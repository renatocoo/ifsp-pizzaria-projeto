<?php
namespace App\Helpers;
use App\Helpers;

class PostHelper extends DateTimeHelper {

    // Retorna o nome do autor de um post junto com a data de criação
    public static function postAuthor($author, $date, $english = false){
        $data = parent::UStoBRDate($date);
        return $english ? 
        self::message($author, $date) : 
        self::mensagem($author, $data);

    }

    private static function message($autor, $data){
        return "Done by $autor in: $data";
    }

    private static function mensagem($autor, $data){
        return "Criado por $autor em: $data";
    }
}
?>
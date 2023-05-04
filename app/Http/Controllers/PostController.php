<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DateTimeHelper;
use App\Helpers\PostHelper;

// classe criada para estudo de metodos estáticos
class PostController extends Controller
{
    public function lista(){
        $date = '2023-04-05';
        $data = DateTimeHelper::UStoBRDate($date);
        echo "Hoje é $data<br><br>";

        $author = PostHelper::postAuthor('Maria da Silva', $date);
        echo $author;
    }
}
?>
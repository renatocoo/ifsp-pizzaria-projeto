<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DateTimeHelper;

// classe criada para estudo de metodos estáticos
class PostController extends Controller
{
    public function lista(){
        $date = '2023-04-05';
        DateTimeHelper::UStoBRDate($date);
        echo "Hoje eh $data";
    }
}
?>
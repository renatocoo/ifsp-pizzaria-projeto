<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function landing() {
        $data = ['textcolor' => 'blue-text', 'title' => 'Eae, mano, de boa?', 'body'=> 'Melhor site do Brasil feio por um aluno do IFSP câmpus Guarulhos! Estudante do curso de ADS. 2023/1'];
        return view('public.landing', ['data' => $data]);
    }
    
    public function cardapio() {
        return view('cardapio');
    }
}

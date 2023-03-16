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

    public function signup() {
        return view('forms.signup');
    }
     
    public function save(Request $request) {
        //Sem injeção de request-> $obj= new Request();
        //dd($request->all());
        //dd($request);
        //print_r($request->all());
        //print_r($request->input('nome'));

        $data = $request->input();
        foreach($data as $key => $value) {
            echo "$key => $value <br>";
        }

        echo '
        <h1>Baby steps</h1><br><br><br><img src="https://suap.ifsp.edu.br/media/alunos/242781.y49d9HeEVfyy.jpg" height="100px" width="100px">
        <style>
            h1{
                color: red;
                font-familly: sans-serif;
            }
        </style>
        ';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

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

        $model = new LoginModel();
        $data = $request->input();
        $v = $model->signUserIn($data);
        return view("public.sign_success", ['info' => $v]);

        echo 'Aconteceu alguma coisa';

    }
}

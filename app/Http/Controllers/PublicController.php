<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LoginModel; // import do model criado com o artisan

class PublicController extends Controller
{
    public function landing()
    {
        $data = ['textcolor' => 'purple-text', 'title' => 'Pizzaria do Jhonas', 'body' => 'Massa em falta, recheio em dobro'];
        return view('public.landing', ['data' => $data]);
    }

    public function cardapio()
    {
        return view('cardapio');
    }

    public function signup()
    {
        return view('forms.signup');
    }  
    
    public function save(Request $request) //Injeção de dependência
    {
        $model = new LoginModel();
        $data = $request->input();//$request->input('nome do campo que você quer')
       /*  foreach ($data as $key => $value){
            echo '$key -> $value <br>'; mostra todos os itens do input, percorridos
        }
        // echo "save's gonna be alright!"; */

        $v = $model->signUserIn($data);
        /* print_r($v); */
        return view('public.sign_success', ['info' => $v]);
    }

    public function atv1()
    {
        return view('atv1');
    }
}

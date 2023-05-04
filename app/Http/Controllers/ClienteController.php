<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\ArrayHelper;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $helper = new ArrayHelper();
        $data = $helper->getData();
        return view('private.clientes.lista', [
            'cols' => $data[0],
            'data' => $data[1]
        ]);
    }

    public function sample(){
        echo 'Sample method...';
    }

    public function display()
    {
        //-------------------------- insert básico
        /* $data = ['nome' => 'Maria', 'snome' => 'Silva', 'telefone' => '(11) 98475-7364'];
        $res = DB::table('clientes')->insert($data);

        if ($res) echo 'Acesso ao BD Realizado com sucesso'; */
    
        ////-------------------------- insert batch
        /* $data = [
            ['nome' => 'José', 'snome' => 'Santos', 'telefone' => '(11) 98475-7344'],
            ['nome' => 'Pedro', 'snome' => 'Souza', 'telefone' => '(11) 98475-7264'],
            ['nome' => 'Tiago', 'snome' => 'Soares', 'telefone' => '(11) 98475-7314'],
            ['nome' => 'Judas', 'snome' => 'Sales', 'telefone' => '(11) 98475-7374'],

        ];

        $res = DB::table('clientes')->insert($data);

        if ($res) echo 'Acesso ao BD Realizado com sucesso'; */

        //-------------------------- insert que retorna id do registro recém inserido
        /* $data = ['nome' => 'Felipe', 'snome' => 'Serrano', 'telefone' => '(12) 98475-7344'];

        $id = DB::table('clientes')->insertGetId($data);

        if ($id) echo 'Acesso ao BD Realizado com sucesso<br>';

        echo "Id do registro: $id"; */

        //-----------------------------------------------------------------------------------------------------------------------------

        //-------------------------- update ou insert de info
        /* $data = ['id' => 4, 'nome' => 'José', 'snome' => 'Santos', 'telefone' => '(11) 9000-1111'];
        DB::table('clientes')->upsert($data, ['id'], ['telefone']);
        echo 'Registro atualizado com sucesso!'; */

        /* $res = DB::table('clientes')->where('id', 6)->update(['nome' => 'Thiago', 'snome' => 'Suarez']);
        if($res) echo 'Registro atualizado com sucesso!'; */


        //-------------------------- atualiza o registro baseando-se em valores nao primarios

        /* $res = DB::table('clientes')->updateOrInsert(['nome' => 'José', 'snome' => 'Santos'], ['telefone' => '(33) 4467-9876']);
        if($res) echo 'Registro atualizado com sucesso!'; */

        //-----------------------------------------------------------------------------------------------------------------------------

        //-------------------------- Recupreando todos os registros da tabela
        /* $clientes = DB::table('clientes')->get();
        dd($clientes); */

        //-------------------------- Encontra todos percorrendo
        /* $clientes = DB::table('clientes')->get();
        foreach ($clientes as $row){
            echo $row->id.' - '.$row->nome.' '.$row->snome.'<br>';
        } */

        //-------------------------- Tras apenas o desejado
       /*  $clientes = DB::table('clientes')->find(3);
        echo $clientes->nome.' '.$clientes->snome; */


        //Recupera registro condicional (where)
        /* $family = DB::table('clientes')->where('snome', 'silva')->get();
        echo "Familia Silva <br> $family"

        foreach ($family as $row){
            echo $row->id.' - '.$row->nome.' '.$row->snome.'<br>';
        } */

        //remove um registro do bd
        $res = DB::table('clientes')->where('id', 2)->delete();
        if($res) echo "Elemento deletado";

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Aqui vai o form de cadastro dos clientes.";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $helper = new ArrayHelper();
        $data = $helper->getClientPhotos();
        return view('private.clientes.fotos', $data); //['cards' => '']
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

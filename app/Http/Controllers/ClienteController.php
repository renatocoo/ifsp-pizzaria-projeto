<?php

namespace App\Http\Controllers;
use App\Helpers\ArrayHelper;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $helper = new ArrayHelper();
        $data = $helper->getData();
        return view('private.clientes.lista', [
            'cols' => $data[0],
            'data' => $data[1]
        ]);
        //compact == ['data' => $data];
    }

    public function display()
    {
        echo 'Lista de Cientes formato perfil.';
    }

    public function create()
    {
        echo 'Aqui vai o form de cadastro dos clientes.';
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $helper = new ArrayHelper();
        $data = $helper->getClientPhotos();
        return view('private.clientes.fotos', $data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

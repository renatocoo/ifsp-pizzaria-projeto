<?php

namespace App\Http\Controllers;
use App\Helpers\ArrayHelper;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $helper = new ArrayHelper();
        $data = $helper->getData();
        return view('private.clientes.lista', ['data' => $data]);
        //compact == ['data' => $data];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'Aqui vai o form de cadastro dos clientes.';
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
        //
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

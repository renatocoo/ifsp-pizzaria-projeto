<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function landing() {
        $data = ['titulo' => 'Começando a usar Controllers!'];
        return view('public/landing', $data);
    }
}

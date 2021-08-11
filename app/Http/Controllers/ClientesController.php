<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function list() {

        $clientes = [
            'Cliente 1',
            'Cliente 2',
            'Cliente 3',
            'Cliente 4'
        ];

        return view('interna.cliente', [
            'clientes' => $clientes
        ]);

    }
}

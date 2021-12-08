<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{       
    public function index(){
        $fornecedores = [
        0 => [
        'nome' => 'Fornecedor 1',
        'status' => 'N',
        'CNPJ' => '000/000/000-00',
        ],
        1 => [
        'nome' => 'Fornecedor 2',
        'status' => 'S',
        ],
        3 => [
            'nome' => 'Fornecedor 3',
            'status' => 'S',
            'ddd' => '11',
            ]
        ];
      
        $msg = isset($fornecedores[0]['CNPJ']) ? 'existe' : 'não existe';
        echo $msg;
        

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}

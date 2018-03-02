<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaturamentoController extends Controller
{
    public function listarClientes()
    {
      return view(
          'faturamento.cliente',
          [
              'clientes' => 'teste',
              'totalClientes' => 'teste',
          ]
      );
    }

    public function cadastrarCliente()
    {
      return view(
          'faturamento.cadastrarCliente',
          [
              'clientes' => 'teste',
              'totalClientes' => 'teste',
          ]
      );
    }
}

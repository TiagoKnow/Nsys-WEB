<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaturamentoController extends Controller
{
    public function listarClientes()
    {
      return view(
          'faturamento.cliente.listar',
          [
              'clientes' => 'teste',
              'totalClientes' => 'teste',
          ]
      );
    }

    public function cadastrarCliente()
    {
      return view(
          'faturamento.cliente.cadastrarCliente',
          [
              'clientes' => 'teste',
              'totalClientes' => 'teste',
          ]
      );
    }
}

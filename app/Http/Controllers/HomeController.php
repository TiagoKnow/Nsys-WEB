<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts; // adicionei essa para teste

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $chart = Charts::multi('areaspline', 'highcharts')
            // Setup the chart settings
            ->title("Resumo do processamento")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 450) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Total de notas processadas', [11,2,12,4,5,20,7,10,9,10,11,12])

            // Setup what the values mean
            ->labels(['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']);

        return view('home', ['chart' => $chart]);
    }
}

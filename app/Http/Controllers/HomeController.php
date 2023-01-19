<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $num1 = 5;
        $num2 = 10;

        logger()->debug('Aqui é um log antes da soma');

        $soma = $num1 + $num2;
        logger()->info('A soma ficou:', compact('soma'));
        logger()->debug('Aqui é um log');

        return 'Hello Word!';
    }
}

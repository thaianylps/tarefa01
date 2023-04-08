<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller{
    public function calculate($n1,$n2,$op=null) {
        if($op) {
            switch ($op) {
                case 'soma':
            $result = $n1 + $n2;
                break;
                case 'subtracao':
                    $result = $n1 - $n2;
                    break;
                case 'multiplicacao':
                    $result = $n1 * $n2;
                    break;
                case 'divisao':
                    if ($n2 == 0) {
                     return "Erro: Divisão por zero não é permitida.";
                    }
                    $result = $n1 / $n2;
                    break;
            }
        } else {
            $soma = $n1 + $n2;
            $subtracao = $n1 - $n2;
            $multiplicacao = $n1 * $n2;
            if ($n2 == 0) {
             $divisao = "Erro: Divisão por zero não é permitida.";
            } else {
             $divisao = $n1 / $n2;
            }
            return "Resultados:
            Soma: $soma
            Subtração: $subtracao
            Multiplicação: $multiplicacao
            Divisão: $divisao";
        }
        return view('conta', ['result'=>$result]);
    }
}
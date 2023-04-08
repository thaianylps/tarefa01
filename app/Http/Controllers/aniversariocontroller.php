<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
class aniversarioController extends Controller
{
    
    public function calculardata($ano, $mes = null, $dia = null) {
    $hoje = Carbon::now('America/Sao_Paulo');
    $dataNascimento = Carbon::createFromDate($ano, $mes, $dia, 'America/Sao_Paulo');
    $dataDiferenca = $dataNascimento->diff($hoje);
    


    if ($dataNascimento > $hoje) {
        return 'Data inválida. Data futura não permitida.';
        return "Idade: $idade anos.";
    }
    return view ("data",['result' =>$dataDiferenca]);
    }

}

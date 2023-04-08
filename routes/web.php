<?php
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\aniversarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route:: get ('/hello/{nome}', function ($nome) {

    return view( 'welcome',["text"=>" Olá, $nome !Bem-vindo ao meu site"]);
})-> where ( 'nome' , '[A-Za-z]{3,}' );

    Route:: get ( '/conta/{n1}/{n2}/{op?}' , [CalculadoraController ::class, 'calculate' ])-> where ( 'n1' , '[0-9]' ) ;

        Route:: get  ('/idade/{ano}/{mes?}/{dia?}',[aniversarioController::class, 'calculardata'])->where('ano', '[0-9]{4}')
        ->where('mes', '[0-9]{1,2}?')
        ->where('dia', '[0-9]{1,2}?');
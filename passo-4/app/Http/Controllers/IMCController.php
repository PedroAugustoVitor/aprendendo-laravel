<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IMC;

class IMCController extends Controller
{
	public function passo($passo){
		return '<h1>Passo '.$passo.' concluído</h1>';
	}
	
	public function form(){
		return view('imc.form');
	}
	
	public function result(Request $request){ 
		$altura = floatval($request->input('altura'));
		$peso = floatval($request->input('peso'));
		$IMC = new IMC(); 
		$resultado = $IMC->calcular($peso, $altura);
		$mensagem = $IMC->formataMsg($resultado);
		return view('imc.result', ['mensagem' => $mensagem]);
	}
}

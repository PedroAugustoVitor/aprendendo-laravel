<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMC extends Model{

public function calcular($peso, $altura){
	$IMC = $peso / ($altura * $altura);
	return $IMC; 
}

public function formataMsg($IMC){  
	$MSG='Seu IMC é ' . $IMC . ' e indica que você está ';
	
	if ($IMC < 18.5)
		$MSG.= ' abaixo do peso!';
	elseif ($IMC >= 18.5 && $IMC <= 24.9)  
		$MSG.=' com peso normal, parabéns!!!! ';
	elseif ($IMC >= 25 && $IMC <= 29.9)  
		$MSG.=' com sobrepeso, cuidado!!!! ' ; 
	elseif ($IMC >= 30 && $IMC <= 34.9)  
		$MSG.=' com obesidade grau I!!!!  ';
	elseif ($IMC >= 35 && $IMC <= 39.9)  
		$MSG.=' com obesidade grau II!!!';
	elseif ($IMC >= 40)  
		$MSG.=' com obesidade grau III!!!';
	return $MSG;
	}
}

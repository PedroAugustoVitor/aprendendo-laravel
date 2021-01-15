<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMCController extends Controller
{
	public function passo($passo){
		return '<h1>Passo '.$passo.' concluído</h1>';
	}
	
}

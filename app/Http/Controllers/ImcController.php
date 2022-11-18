<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller {
    public function renderForm() {
        return view('form');
    }

    public function calcular(Request $request) {
        $peso = $request->peso;
        $altura = $request->altura;

        $imc = $peso / ($altura * $altura);

        return view('resultado', compact('imc'));
    }
}

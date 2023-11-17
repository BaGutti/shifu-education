<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebasController extends Controller
{
    /*
    index para mostrar
    store para guardar
    update para actualizar
    destroy para eliminar
    edit para mostrar el form para edición
    */
    public function store(Request $request){
        $request->validate([
            'resPh' => 'required',
            'resVh' => 'required',
            'personas_id' => 'required'
        ]);
    }
}

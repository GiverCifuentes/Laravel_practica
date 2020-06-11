<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetenciaControlador extends Controller
{
    //
    public function index (){
        //return 'Listado de competencias desde el controlador';
        return view('competencias.index');
    }

    //
    public function create (){
        return 'Formulario para crear una competencia desde el controlador';
    }

    public function store ($competencia){
        return " STORE {$competencia}";
    }

    public function show ($competencia){
        return "Mostrando la competencia desde controlador {$competencia}";
    }

    public function edit ($competencia){
        return " -EDIT- {$competencia}";
    }

    public function update ($competencia){
        return " -UPDATE- {$competencia}";
    }

    public function destroy ($competencia){
        return " -DESTROY- {$competencia}";
    }

    /*
    store
    show
    edit
    update
    destroy*/

}

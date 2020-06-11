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

    public function show ($competencia){
        return "Mostrando la competencia desde controlador {$competencia}";
    }



    /*
    store
    show
    edit
    uddate
    destroy*/

}

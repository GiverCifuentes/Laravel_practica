<?php

namespace App\Http\Controllers;

use App\Product; //Incluir el modelo de product
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index (){
        //$products = Product::all(); //consultar todos los productos
        //dd($products);
        return view('products.index')->with(['products'=>Product::all()]);
    }

    //
    public function create (){
        return 'Formulario para crear un producto desde el controlador';
    }

    public function store ()
    {
    //
    }

    public function show ($product){
        return "Mostrando el producto desde controlador {$product}";
    }

    public function edit ($product){
        return "Mostrando el formulario del producto a modificar {$product}";
    }

    public function update (){
        //Para los cambios
        }

        public function destroy (){
            //Para eliminar los datos
        }
}

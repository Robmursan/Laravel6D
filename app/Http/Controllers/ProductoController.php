<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function verproductos(){
        
        /* investigar directrices de consulta get trae todos los registro, first trae el primer  , find busca por ID , latest Trae todos los registro de la
        base de datos por orden ascendente 
          */


        //$productos = Producto::first();
        //dd($productos);
        //$productos = Producto::find(30);
        $productos = Producto::latest('id')-> cursorPaginate();
        //dd($productos);



        return view("producto", ["producto" => $productos]);
    }

    public function index(){

        $productos = Producto::latest('id')-> cursorPaginate();
        //dd($productos);
        return view("producto.index", ["producto" => $productos]);
    }//cierre de funcion del index 


    public function destroy($id)
    {
        $producto = Producto::find($id);//busqueda por ID creando la variable por ID 
        $producto->delete();//eliminacion de la variable 
        //Creacion de variable msj 
        $msj = "Producto eliminado correctamente.";

        $producto = Producto::latest("id")->paginate();//despues de eliminar muestra la tabla 

        return view ("producto.index",["mensaje"=>$msj,"producto" => $producto]);//regresa 




       /*  if ($producto) {
            $producto->delete();
            return redirect()->back()->with('success', 'Producto eliminado correctamente.');
        } else {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        } */
    } // cierre de la funcion eliminar 

    public function create(){

        return view("producto.create");
    }// cierre de la funcion create




    public function store(Request $request)
    {
        $request->validate([
           'nombre' => 'required|string|max:255',
           'descripcion' => 'required|string|max:500',
           'precio' => 'required|numeric|min:0',
           'existencia' => 'required|integer|min:0',
       ]);
       $post = new Producto;

       $post->nombre = $request->nombre;
       $post->descripcion = $request->descripcion;
       $post->precio = $request->precio;
       $post->existencia = $request->existencia;

       $post->save();

      $msj = "Producto creado correctamente.";
       $productos = Producto::latest("id")->paginate();

       return view("producto.index", ["mensaje"=>$msj,"producto" => $productos]);



    }

        public function edit($id){
             $producto = Producto::find($id);
        //return view("producto.edit", ["producto" => $producto]);
        return view ('producto.edit', compact('producto'));
    }// cierre de la funcion create




    public function update(Request $request, $id)
    {
        $request->validate([
           'nombre' => 'required|string|max:255',
           'descripcion' => 'required|string|max:500',
           'precio' => 'required|numeric|min:0',
           'existencia' => 'required|integer|min:0',
       ]);

       //toma el file y lo guarda en la carpeta public/fotos
       $file = $request->file('foto');
       $nombre_imagen = $file->getClientOriginalName();

       $nombre_carpeta = "img/";
       $url = "http://localhost:8000/";
      
       $imgurl = $url. $nombre_carpeta. $nombre_imagen;

       $almacenar = $request->file('foto')->move($nombre_carpeta, $nombre_imagen);

       $prod = new Producto;

       $prod->nombre = $request->nombre;
       $prod->descripcion = $request->descripcion;
       $prod->precio = $request->precio;
       $prod->existencia = $request->existencia;
       $prod->imgurl = $imgurl;

       $prod->save();

      $msj = "Producto creado correctamente.";
       $productos = Producto::latest("id")->paginate();

       return view("producto.index", ["mensaje"=>$msj,"producto" => $productos]);
       


    }

}
    



//cierrre de la clase 

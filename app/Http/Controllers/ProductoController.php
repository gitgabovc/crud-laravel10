<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::join('categorias', 'productos.categoria_id','=', 'categorias.id')->get(['productos.*', 'categorias.categoria']);
        return view('welcome', [
            'productos' => $productos
        ]);
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('create', compact('categorias'));
    }

    public function store(Request $request)
    {

        Producto::create([
            'producto' => $request->inputProducto,
            'precio' => $request->inputPrecio,
            'cantidad' => $request->inputCantidad,
            'categoria_id' => $request->categoria_id
        ]);

        return redirect()->route('producto.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return back()->with('msg', 'Agregado con exito');
    }

    public function edit(Producto $producto)
    {
        return view('edit', [
            'producto' => $producto
        ]);
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $req = [
            'producto' => $request->inputProducto,
            'precio' => $request->inputPrecio,
            'cantidad' => $request->inputCantidad
        ];
        $producto->update($req);
        return redirect()->route('producto.index');
    }
}

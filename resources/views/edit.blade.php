@extends('layout.app')

@section('titulo')
Editar Producto
@endsection

@section('contenido')
<form class="w-50 m-auto" method="POST" action="{{route('producto.update', $producto->id)}}">
    @method("PUT")
    @csrf
    <div class="mb-3">
        <label for="producto" class="form-label">Producto</label>
        <input type="text" class="form-control" id="producto" aria-describedby="producto" name="inputProducto"
            value="{{$producto->producto}}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" aria-describedby="precio" name="inputPrecio"
            value="{{$producto->precio}}">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" aria-describedby="cantidad" name="inputCantidad"
            value="{{$producto->cantidad}}">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
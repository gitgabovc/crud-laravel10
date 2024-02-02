@extends('layout.app')

@section('titulo')
Agregar Producto
@endsection

@section('contenido')
<form class="w-50 m-auto" method="POST" action="{{route('producto.store')}}">
    @csrf
    <div class="mb-3">
        <label for="producto" class="form-label">Producto</label>
        <input type="text" class="form-control" id="producto" aria-describedby="producto" name="inputProducto">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" aria-describedby="precio" name="inputPrecio">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" aria-describedby="cantidad" name="inputCantidad">
    </div>
    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select class="form-select" aria-label="Default select example" name="categoria_id">
            <option disabled selected>Selecciona una categoria</option>
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
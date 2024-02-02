@extends('layout.app')

@section('titulo')
Editar Categoria
@endsection

@section('contenido')
<form class="w-50 m-auto" method="POST" action="{{ route('categoria.update', $categoria->id)}}">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <input type="text" class="form-control" id="categoria" aria-describedby="categoria" name="categoria" value="{{$categoria->categoria}}">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
@extends('layout.app')

@section('titulo')
Agregar Categoria
@endsection

@section('contenido')
<form class="w-50 m-auto" method="POST" action="{{ route('categoria.store')}}">
    @csrf
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <input type="text" class="form-control" id="categoria" aria-describedby="categoria" name="categoria">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
@extends('layout.app')

@section('titulo')
Lista de Categorias
@endsection


@section('contenido')
<table class="table mt-3 w-75 m-auto">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=0;
        @endphp
        @foreach ($categorias as $categoria)
        @php
        $i++;
        @endphp
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$categoria->categoria}}</td>
            <td>
                <form action="{{route('categoria.destroy', $categoria)}}" method="POST" id="formDelete">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-danger text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="" style="width: 15px; height:15px">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>

                    </button>
                </form>

                <a href="{{route('categoria.edit', $categoria)}}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="" style="width: 15px; height:15px">>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>

                </a>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>

<a class="btn btn-primary position-fixed  fs-3 fw-bold rounded-circle" style="bottom:80px; right:80px;"
    href="{{ route('categoria.create') }}">+</a>
@endsection
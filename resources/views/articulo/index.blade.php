@extends('layouts.plantillabase')
@section('contenido')
    Articulos
    <a href="categorias/create" type="button" class="btn btn-success" >Nuevos Articulos</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">descripcion</th>
            <th scope="col">categoria</th>
            <th scope="col">estado</th>
            <th scope="col">acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articulos as $articulo)
            <tr>
                <td>
                    {{$articulo -> descripcion}}
                </td>
                <td>
                    {{$articulo -> categoria}}
                </td>
                <td>
                    {{$articulo -> estado ? 'Activo':'INACTIVO'}}
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
@endsection

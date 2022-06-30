@extends('layouts.plantillabase')
@section('contenido')
    <a href="categorias/create" type="button" class="btn btn-primary m-2" >create</a>
    <button type="button" class="btn btn-dark">Succes</button>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">descripcion</th>
            <th scope="col">estado</th>
            <th scope="col">acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <th scope="row">{{$categoria -> descripcion}}</th>
            <td>{{$categoria -> estado ? 'si':'no'}}</td>
            <td>
                <a href="categorias/{{$categoria -> _id}}/edit" type="button" class="btn btn-warning">editar</a>
                <a href="categorias/{{$categoria -> _id}}/delete" type="button" class="btn btn-danger">eliminar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

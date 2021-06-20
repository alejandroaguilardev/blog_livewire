@extends('adminlte::page')

@section('title', 'Administrador - Etiquetas')

@section('content_header')
    @can('admin.tags.create')
        <a href="{{route('admin.tags.create')}}" class="btn btn-success float-right">Agregar</a>
    @endcan 
    <h1>Lista de Etiquetas</h1>
@stop

@section('content')
    @if(session('alert'))
        <div class = "alert alert-danger"> {{session('alert')}}</div>    
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        @can('admin.tags.edit')
                            <th colspan="2"></th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            @can('admin.tags.edit')

                            <td width="1px">
                                <a href="{{route('admin.tags.edit',$tag)}}" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                                <td width="1px">
                                    <form action="{{route('admin.tags.destroy', $tag)}}" method="post">
                                        @method('delete')
                                        @csrf
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
@stop

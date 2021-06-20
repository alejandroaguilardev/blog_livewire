@extends('adminlte::page')

@section('title', 'Administrador - Categorías')

@section('content_header')
    @can('admin.categories.create')
        <a href="{{route('admin.categories.create')}}" class="btn btn-success float-right">Agregar</a>
    @endif
    <h1>Lista Categorías</h1>
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
                        <th>Name</th>
                        @can('admin.tags.edit')
                            <th colspan="2"></th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            @can('admin.categories.edit')
                            <td width="10px">
                                <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-sm btn-primary text-white">Editar</a>
                            </td>
                                <td width="10px">
                                    <form action="{{route('admin.categories.destroy', $category)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

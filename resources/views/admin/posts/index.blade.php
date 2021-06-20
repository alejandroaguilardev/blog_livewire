@extends('adminlte::page')

@section('title', 'Administrador - Posts')

@section('content_header')
    <a href="{{route('admin.posts.create')}}" class="btn btn-success float-right">Nuevo Post</a>
    <h1>Lista de Posts</h1>

@endsection

@section('content')

    @if (session('alert'))
        <div class="alert alert-success">
            <strong>{{session('alert')}}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

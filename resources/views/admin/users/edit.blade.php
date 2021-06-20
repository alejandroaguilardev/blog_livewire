@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Asignar Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            @if(session('alert'))
                <div class="alert alert-success">
                    <strong>{{session('alert')}}</strong>
                </div>
            @endif
        </div>
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$user->name}}</p>
            <h2 class="h5">Listado de Roles</h2>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label> 
                    </div>                   
                @endforeach
                {!! Form::submit('Asignar Rol', ['class' =>'btn btn-primary mt-2']) !!}
            {!!Form::close()!!}
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
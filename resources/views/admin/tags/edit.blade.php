@extends('adminlte::page')

@section('title', 'Administrador - Etiquetas Editar')

@section('content_header')
    <h1>Actualizar Etiqueta</h1>
@stop


@section('content')
    @if(session('alert'))
        <div class = "alert alert-success"> {{session('alert')}}</div>    
    @endif
    <div class="card">
        <div class="card-body">
           

            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

                @include('admin.tags.partiels.form')
                {!! Form::submit('Actualizar',['class' => 'btn btn-success'])!!}

            {!! Form::close() !!}



@stop


@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection

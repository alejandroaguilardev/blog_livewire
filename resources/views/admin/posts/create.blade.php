@extends('adminlte::page')

@section('title', 'Administrador - Posts')

@section('content_header')
    <h1>Nuevo de Posts</h1>

@endsection

@section('content')


    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true])!!}

                 
                @include('admin.posts.partials.form')

            {!! Form::submit('Crear Post', ['class' => 'btn btn-success'])!!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    <style>
        .image-wrapper{
            position:relative;
            padding-bottom:56.25%;
        }
        .image-wrapper img{
            position:absolute;
            object-fit:cover;
            width:100%;
            height:100%; 
        }
    </style>
@endsection

 
@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

    <script>
        document.getElementById("file").addEventListener('change', uploadImage);

        function uploadImage(event) {
            
            let file = event.target.files[0];
            let reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
@endsection


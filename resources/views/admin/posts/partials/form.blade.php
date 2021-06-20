<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post', 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id','Color') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control'] )!!}

    @error('categories')
        <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-4">
            {!! Form::checkbox('tags[]', $tag->id, null)!!}
             {{$tag->name}}
        </label>
    @endforeach
    <br>
    @error('tags')
        <span class="text-danger"> {{$message}}</span>
    @enderror
</div>

<div class="row mb-4">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
                <img id="picture" src ="{{Storage::url($post->image->url)}}">
            @else
                <img id="picture" src ="{{asset('img/no-image.jpg')}}">
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del post')!!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*'])!!}
        </div>
        <p>La propoción de la imagen debe ser de <strong>600x 400 Pixeles</strong>.  y debe ser de extension <strong> .jpg o .png </strong></p>
        @error('file')
            <span class="text-danger"> {{$message}}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract','Extrato')!!}
    {!! Form::textarea('extract', null, ['class' => 'form-control'])!!}

    @error('extract')
        <span class="text-danger"> {{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body','Descripción')!!}
    {!! Form::textarea('body', null, ['class' => 'form-control'])!!}

    @error('body')
        <span class="text-danger"> {{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-4">
        {!! Form::radio('status', 1, true)!!}
         Borrador
    </label>

    <label class="mr-4">
        {!! Form::radio('status', 2, false)!!}
         Publicado
    </label>

    @error('status')
        <span class="text-danger"> {{$message}}</span>
    @enderror

</div>
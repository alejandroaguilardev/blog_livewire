<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre'] )!!}
    
    @error('name')
        <span class="text-danger"> {{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug', 'readonly'] )!!}
    
    @error('slug')
        <span class="text-danger"> {{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('colour','Color') !!}
    {!! Form::select('colour', $colors, null, ['class' => 'form-control'] )!!}

    @error('colour')
        <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
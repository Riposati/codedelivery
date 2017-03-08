<div class="form-group">

    {!! Form::label('name' , 'Nome:') !!}
    {!! Form::text('name' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('nameCategory' , 'Nome da categoria:') !!}
    {!! Form::select('category_id', $categories ,null, ['class' => 'form-control']) !!}

    {!! Form::label('descricao' , 'Descricao:') !!}
    {!! Form::text('description' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('preco' , 'Preço:') !!}
    {!! Form::text('price' ,null, ['class' => 'form-control']) !!}

</div>


<div class="form-group">

    {!! Form::submit('Salvar' , ['class' => 'btn btn-primary']) !!}

</div>


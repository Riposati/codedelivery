<div class="form-group">

    {!! Form::label('name' , 'Nome:') !!}
    {!! Form::text('name' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('email' , 'Email:') !!}
    {!! Form::text('email' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('senha' , 'senha:') !!}
    {!! Form::password('password', array('class' => 'form-control')) !!}

</div>

<div class="form-group">

    {!! Form::submit('Salvar' , ['class' => 'btn btn-primary']) !!}

</div>

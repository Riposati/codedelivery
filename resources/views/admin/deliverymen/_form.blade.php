<div class="form-group">

    {!! Form::label('name' , 'Nome:') !!}
    {!! Form::text('user[name]' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('email' , 'Email:') !!}
    {!! Form::text('user[email]' ,null, ['class' => 'form-control']) !!}

    <hr>

</div>

<div class="form-group">

    {!! Form::submit('Salvar' , ['class' => 'btn btn-primary']) !!}

</div>

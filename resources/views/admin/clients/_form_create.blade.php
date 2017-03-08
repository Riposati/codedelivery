<div class="form-group">

    {!! Form::label('name' , 'Nome:') !!}
    {!! Form::text('name' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('email' , 'Email:') !!}
    {!! Form::text('email' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('role' , 'Tipo de usuário:') !!}
    {!! Form::select('roles', $tipos ,null, ['class' => 'form-control']) !!}

    {!! Form::label('senha' , 'senha:') !!}
    {!! Form::password('password', array('class' => 'form-control')) !!}

    <hr>

    {!! Form::label('endereço' , 'Endereço:') !!}
    {!! Form::text('address' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('cidade' , 'Cidade:') !!}
    {!! Form::text('city' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('estado' , 'Estado:') !!}
    {!! Form::text('state' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('cep' , 'CEP:') !!}
    {!! Form::text('zipcode' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('telefone' , 'Telefone:') !!}
    {!! Form::text('phone' ,null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::submit('Salvar' , ['class' => 'btn btn-primary']) !!}

</div>

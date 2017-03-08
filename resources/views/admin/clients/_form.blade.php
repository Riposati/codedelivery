<div class="form-group">

    {!! Form::label('name' , 'Nome:') !!}
    {!! Form::text('user[name]' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('email' , 'Email:') !!}
    {!! Form::text('user[email]' ,null, ['class' => 'form-control']) !!}

    {!! Form::label('role' , 'Tipo de usuário:') !!}
    {!! Form::select('roles', $tipos ,null, ['class' => 'form-control']) !!}

    <br><br><a href="{{ route('admin.clientes.trocasenha' , ['id' => $cliente->id]) }}"
       class="btn btn-danger">Mudar a senha</a></td>

    <hr>

    {!! Form::hidden('id',$cliente->id) !!}
    {!! Form::hidden('tipos',implode($tipos , ',')) !!}

    {!! Form::label('endereço' , 'Endereço:') !!}
    {!! Form::text('address' ,$cliente->address, ['class' => 'form-control']) !!}

    {!! Form::label('cidade' , 'Cidade:') !!}
    {!! Form::text('city' ,$cliente->city, ['class' => 'form-control']) !!}

    {!! Form::label('estado' , 'Estado:') !!}
    {!! Form::text('state' ,$cliente->state, ['class' => 'form-control']) !!}

    {!! Form::label('cep' , 'CEP:') !!}
    {!! Form::text('zipcode' ,$cliente->zipcode, ['class' => 'form-control']) !!}

    {!! Form::label('telefone' , 'Telefone:') !!}
    {!! Form::text('phone' ,$cliente->phone, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::submit('Salvar' , ['class' => 'btn btn-primary']) !!}

</div>

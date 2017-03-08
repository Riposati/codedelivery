@extends('app')

@section('content')

    <div class="container">

        <h3>Trocar senha - Usuário</h3>

        @include('errors._check')

        {!! Form::open(['route' => ['admin.clientes.storePass' , 'id'=>$id ],'method' => 'PUT']) !!}

        <div class="form-group">

            {!! Form::hidden('id',$id) !!}

            {!! Form::label('senha' , 'Digite sua nova senha:') !!}
            {!! Form::password('password',array('class' => 'form-control')) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Salvar' , ['class' => 'btn btn-primary']) !!}

        </div>

    {!! Form::close() !!}

@endsection
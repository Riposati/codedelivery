@extends('app')

@section('content')

    <div class="container">

        <h3>Editar Entregador</h3>

        @include('errors._check')

        {!! Form::model($entregador, ['route' => ['admin.entregadores.update' , 'idDeliveryman' => $entregador->id] , 'method' => 'PUT']) !!}

        <div class="form-group">

            {!! Form::label('name' , 'Nome:') !!}
            {!! Form::text('name' , null , ['class' => 'form-control']) !!}

            {!! Form::label('email' , 'Email:') !!}
            {!! Form::text('email' ,null, ['class' => 'form-control']) !!}

            <br><br><a href="{{ route('admin.entregadores.trocasenha' , ['id' => $entregador->id]) }}"
                       class="btn btn-danger">Mudar a senha</a></td>
            <hr>

        </div>

        <div class="form-group">

            {!! Form::submit('Salvar' , ['class' => 'btn btn-primary']) !!}

        </div>


        {!! Form::close() !!}

    </div>

@endsection
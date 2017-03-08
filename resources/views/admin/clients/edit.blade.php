@extends('app')

@section('content')

    <div class="container">

        <h3>Editar Usuário</h3>

        @include('errors._check')

        {!! Form::model($cliente, ['route' => ['admin.clientes.update' , 'idCliente'=>$cliente->id] , 'method' => 'PUT']) !!}

            @include('admin.clients._form')

        {!! Form::close() !!}

    </div>

@endsection
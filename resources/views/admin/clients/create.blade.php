@extends('app')

@section('content')

    <div class="container">

        <h3>Cadastrar usuário</h3>

        @include('errors._check')

        {!! Form::open(['route' => 'admin.clientes.store']) !!}

            @include('admin.clients._form_create')

        {!! Form::close() !!}

    </div>

@endsection
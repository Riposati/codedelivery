@extends('app')

@section('content')

    <div class="container">

        <h3>Cadastrar entregador</h3>

        @include('errors._check')

        {!! Form::open(['route' => 'admin.entregadores.store']) !!}

            @include('admin.deliverymen._form_create')

        {!! Form::close() !!}

    </div>

@endsection
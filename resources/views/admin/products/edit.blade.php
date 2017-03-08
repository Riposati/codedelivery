@extends('app')

@section('content')

    <div class="container">

        <h3>Editar Produto</h3>

        @include('errors._check')

        {!! Form::model($produto, ['route' => ['admin.produtos.update' , 'idProduto'=>$produto->id] , 'method' => 'PUT']) !!}

            @include('admin.products._form')

        {!! Form::close() !!}

    </div>

@endsection
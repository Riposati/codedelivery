@extends('app')

@section('content')

    <div class="container">

        <h3>Editar Categorias</h3>

        @include('errors._check')

        {!! Form::model($categoria, ['route' => ['admin.categorias.update' , 'idCategoria'=>$categoria->id] , 'method' => 'PUT']) !!}

            @include('admin.categories._form')

        {!! Form::close() !!}

    </div>

@endsection
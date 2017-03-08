@extends('app')

@section('content')

    <div class="container">

        <h3>Nova Categorias</h3>

        @include('errors._check')

        {!! Form::open(['route' => 'admin.categorias.store']) !!}

            @include('admin.categories._form')

        {!! Form::close() !!}

    </div>

@endsection
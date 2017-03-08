@extends('app')

@section('content')

    <div class="container">

        <h3>Categorias</h3>

        <a href="{{ route('admin.categorias.create') }}" class="btn btn-default">Criar nova categoria</a>
        <br><br>

        <table class="table table-bordered">

            <thead>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>

            </thead>

            <tbody>

            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td><a href="{{route('admin.categorias.edit' , ['id' => $category->id]) }}"
                           class="btn btn-success">editar</a>
                        <a href="{{ route('admin.categorias.delete' ,['id' => $category->id]) }}"
                           class="btn btn-danger">deletar</a></td>
                </tr>
            @endforeach

            </tbody>

        </table>

        {!! $categories->render() !!}

    </div>


@endsection
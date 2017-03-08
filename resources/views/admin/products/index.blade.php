@extends('app')

@section('content')

    <div class="container">

        <h3>Produtos</h3>

        <a href="{{ route('admin.produtos.create') }}" class="btn btn-default">Criar novo produto</a>
        <br><br>

        <table class="table table-bordered">

            <thead>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria deste produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>

            </thead>

            <tbody>

            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><a href="{{route('admin.produtos.edit' , ['id' => $product->id]) }}"
                           class="btn btn-success">editar</a>
                        <a href="{{ route('admin.produtos.delete' ,['id' => $product->id]) }}"
                           class="btn btn-danger">deletar</a></td>
                </tr>
            @endforeach

            </tbody>

        </table>

        {!! $products->render() !!}

    </div>


@endsection
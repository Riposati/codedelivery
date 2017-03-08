@extends('app')

@section('content')

    <div class="container">

        <h3>Usuários</h3>

        <a href="{{ route('admin.clientes.create') }}" class="btn btn-default">Cadastrar usuário</a>
        <br><br>

        <table class="table table-bordered">

            <thead>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Papel no sistema</th>
                <th>Ação</th>
            </tr>

            </thead>

            <tbody>

            @foreach($clients as $client)

                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->user->name}}</td>
                    <td>{{$client->user->email}}</td>

                    <td><b>{{$client->user->role}}</b></td>

                    <td>
                        <a href="{{route('admin.clientes.ver' , ['id' => $client->id]) }}"
                           class="btn btn-info">Ver detalhes</a>
                        <a href="{{route('admin.clientes.edit' , ['id' => $client->id]) }}"
                           class="btn btn-success">editar</a>

                        <a href="{{ route('admin.clientes.delete' ,['id' => $client->id]) }}"
                           class="btn btn-danger">deletar</a></td>
                </tr>
            @endforeach

            </tbody>

        </table>

        {!! $clients->render() !!}

    </div>


@endsection
@extends('app')

@section('content')

    <div class="container">

        <h3>Detalhes Usuário</h3>

        <table class="table table-bordered">

            <thead>

            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Endereço</th>
                <th>Estado</th>
                <th>Cep</th>
                <th>Telefone</th>
            </tr>

            </thead>

            <tbody>

            @foreach($users as $client)

                <tr>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->city}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->state}}</td>
                    <td>{{$client->zipcode}}</td>
                    <td>{{$client->phone}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>

    </div>

@endsection
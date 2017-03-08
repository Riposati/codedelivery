@extends('app')

@section('content')

    <div class="container">

        <h3>Entregadores</h3>

        <a href="{{ route('admin.entregadores.create') }}" class="btn btn-default">Cadastrar entregador</a>
        <br><br>

        <table class="table table-bordered">

            <thead>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>

            </thead>

            <tbody>

            @foreach($deliverymen as $deliveryman)

                    <tr>
                        <td>{{$deliveryman->id}}</td>
                        <td>{{$deliveryman->name}}</td>
                        <td>{{$deliveryman->email}}</td>
                        <td>
                            <a href="{{ route('admin.entregadores.edit' , ['id' => $deliveryman->id]) }}"
                               class="btn btn-success">editar</a>
                            <a href="{{ route('admin.entregadores.delete' , ['id' => $deliveryman->id]) }}"
                               class="btn btn-danger">deletar</a>
                        </td>
                    </tr>
            @endforeach


            </tbody>

        </table>

        {!! $deliverymen->render() !!}

    </div>


@endsection
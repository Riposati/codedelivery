@extends('app')

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Entregue em:</div>

            <div class="panel-body">

                <h3>Pedido: #{{$order->id}}</h3>
                <hr>
                <h3>Total: R$ {{$order->total}}</h3>
                <hr>
                <h3>Cliente: {{$order->client->user->name}}
                    <hr>
                    <h3>Telefone: {{$order->client->phone}}</h3>
                    <hr>
                    <h3>Data da entrega: {{$order->created_at}}</h3>
                    <hr>


                    <b>Endereço</b>: {{$order->client->address}}<br>
                    <b>Cidade</b>: {{$order->client->city}}<br>
                    <b>Estado</b>: {{$order->client->state}}<br>


            </div>
        </div>

    </div>

@endsection
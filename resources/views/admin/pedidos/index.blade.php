@extends('app')

@section('content')

    <div class="container">

        <h3>Pedidos</h3>

        <table class="table table-bordered">

            <thead>

            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Data</th>
                <th>Items</th>
                <th>Entregador</th>
                <th>Status</th>
                <th>Informações</th>
            </tr>

            </thead>

            <tbody>

            @foreach($orders as $order)
                <tr>
                    <td>#{{$order->id}}</td>
                    <td>R$ {{$order->total}}</td>
                    <td>{{$order->created_at}}</td>

                    <td>
                        <ul>

                            @foreach($order->items as $item)

                                <li>{{$item->product->name}}</li>

                            @endforeach

                        </ul>
                    </td>

                    <td>

                        @if($order->deliveryman)
                            <h4>{{$order->deliveryman->name}}</h4>
                        @else
                            --
                        @endif

                    </td>

                    <td>
                        @if($order->status==0 || $order->status==1)
                            <h4 style="color:#bc101c">Pendente</h4>
                        @elseif($order->status==2)
                            <h4 style="color:#c40dc4">À caminho</h4>
                        @elseif($order->status==3)
                            <h4 style="color:#05c105">Entregue</h4>
                        @endif

                    </td>

                    @if($order->status==0 || $order->status==1 || $order->status==2)
                        <td><a href="{{route('admin.pedidos.edit' , ['id' => $order->id])}}"
                               class="btn btn-default">Alteração</a>
                        </td>
                    @else
                        <td>

                            <a href="{{route('admin.pedidos.ver' , ['id' => $order->id])}}"
                               class="btn btn-default">Concluído</a>

                        </td>
                    @endif
                </tr>
            @endforeach

            </tbody>

        </table>

        {!! $orders->render() !!}

    </div>


@endsection
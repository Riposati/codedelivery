<?php
/**
 * Created by PhpStorm.
 * User: Gustavo
 * Date: 06/03/2017
 * Time: 17:27
 */

namespace codedelivery\Http\Controllers;


use codedelivery\Repositories\OrderRepository;
use codedelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $orders = $this->repository->paginate();
        return view('admin.pedidos.index' , compact('orders'));
    }

    public function ver($id)
    {
        $order = $this->repository->find($id);
        return view('admin.pedidos.ver', compact('order'));
    }

    public function edit($id, UserRepository $userRepository){

        $orders = $userRepository->listas();

        $list_status = [

            0=>'',1=>'Pendente' , 2=>'A caminho', 3=>'Entregue'
        ];

        $order = $this->repository->find($id);
        return view('admin.pedidos.edit', compact('order' , 'list_status', 'orders'));
    }

    public function update(Request $request, $id){

        $all = $request->all();
        $this->repository->update($all , $id);

        return redirect()->route('admin.pedidos.index');
    }
}
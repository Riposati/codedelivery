<?php

namespace codedelivery\Http\Controllers;

use codedelivery\Http\Requests\DeliverymenRequest;
use codedelivery\Models\User;
use codedelivery\Repositories\ClientsRepository;
use codedelivery\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;

class DeliverymenController extends Controller
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $deliverymen = User::where('role', 'like' , '%deliveryman%')->paginate(10);
        return view('admin.deliverymen.index', compact('deliverymen'));
    }

    public function create()
    {
        return view('admin.deliverymen.create');
    }

    public function store(DeliverymenRequest $request)
    {
        $role = 'deliveryman';

        if($request->password == null){
            $request->password = "semsenha";
        }
        //dd($request->password);

        DB::insert('insert into users (name,email,password,role) values (? , ? , ? , ?)',
            array($request->name, $request->email, bcrypt($request->password), $role));

        return redirect()->route('admin.entregadores.index');
    }

    public function edit($idEntregador)
    {
        $entregador = $this->repository->find($idEntregador);
        return view('admin.deliverymen.edit', compact('entregador'));
    }

    public function update(DeliverymenRequest $request, $id)
    {
        DB::update("update users set name = '$request->name' , email = '$request->email' where id = $request->id");
        return redirect()->route('admin.entregadores.index');
    }

    public function editPass($id)
    {
        return view('admin.deliverymen.trocasenha', compact('id'));
    }

    public function storePass(PasswordRequest $request)
    {
        $newPass = bcrypt($request->password);
        DB::update("update users set password = '$newPass' where id = $request->id");
        return redirect()->route('admin.entregadores.index');
    }

    public function delete($idDeliveryman)
    {
        DB::update("update orders set user_deliveryman_id = NULL, status = 1 where user_deliveryman_id = $idDeliveryman");
        DB::table('users')->where('id', $idDeliveryman)->delete();
        return redirect()->route('admin.entregadores.index');
    }
}

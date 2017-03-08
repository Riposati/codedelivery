<?php

namespace codedelivery\Http\Controllers;

use codedelivery\Http\Requests\AdminClientsEditRequest;
use codedelivery\Http\Requests\AdminClientsRequest;
use codedelivery\Http\Requests\PasswordRequest;
use codedelivery\Repositories\ClientsRepository;
use codedelivery\Service\ClientService;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    private $repository;
    private $clientService;

    public function __construct(ClientsRepository $repository, ClientService $clientService)
    {
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    private function retornaRole($request)
    {
        $tiposRoles = explode(",", $request->tipos);

        $role = $tiposRoles[$request->roles];

        return $role;
    }

    public function index()
    {
        $clients = $this->repository->orderBy('id', 'asc')->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    public function ver($id)
    {
        $users = DB::table('users')
            ->join('clients', 'users.id', '=', 'clients.user_id')
            ->select('users.name', 'users.email', 'clients.city', 'clients.address', 'clients.state', 'clients.zipcode',
                'clients.phone')->where('users.id', '=', $id)
            ->get();

        return view('admin.clients.ver', compact('users'));
    }

    public function create()
    {
        $tipos = ['0' => 'cliente', '1' => 'admin'];
        return view('admin.clients.create', compact('tipos'));
    }

    public function store(AdminClientsRequest $request)
    {
        if ($request->roles == 0)
            $role = "cliente";
        else
            $role = "admin";

        DB::insert('insert into users (name,email,password,role) values (? , ? , ? , ?)',
            array($request->name, $request->email, bcrypt($request->password), $role));

        $id = DB::getPdo()->lastInsertId();

        DB::insert('insert into clients (user_id,city,address,state,zipcode,phone) values (? , ?, ? , ? , ? , ?)',
            array($id, $request->city, $request->address, $request->state, $request->zipcode, $request->phone));

        /*$data = $request->all();
        $this->clientService->save($data);*/

        return redirect()->route('admin.clientes.index');
    }

    public function edit($idCliente)
    {
        $cliente = $this->repository->find($idCliente);

        $tipos[0] = $cliente->user->role;

        if ($tipos[0] == 'admin')

            $tipos[1] = 'cliente';
        else
            $tipos[1] = 'admin';

        $tipos = ['0' => $tipos[0], '1' => $tipos[1]];

        return view('admin.clients.edit', compact('cliente', 'tipos'));
    }

    public function update(AdminClientsEditRequest $request, $id)
    {
        $role = $this->retornaRole($request);

        DB::update("update users set role = '$role' where id = $request->id");

        $data = $request->all();

        $this->clientService->update($data, $id);

        return redirect()->route('admin.clientes.index');
    }

    public function editPass($id)
    {
        return view('admin.clients.trocasenha', compact('id'));
    }

    public function storePass(PasswordRequest $request)
    {
        $newPass = bcrypt($request->password);

        DB::update("update users set password = '$newPass' where id = $request->id");

        return redirect()->route('admin.clientes.index');
    }

    public function delete($idCliente)
    {

        /*DB::table('users')->where('id', $idCliente)->delete(); // remove a dependencia de entidades entre user e client
        DB::table('orders')->where('user_id', $idCliente)->delete(); // remove os pedidos dessa pessoa*/

        // usando o eloquent para remover as dependencias entre os models, as entidades
        $this->repository->find($idCliente)->user()->delete();
        $this->repository->find($idCliente)->order()->delete();

        //dd($this->repository->find($idCliente)->order());

        $this->repository->delete($idCliente);
        return redirect()->route('admin.clientes.index');
    }
}

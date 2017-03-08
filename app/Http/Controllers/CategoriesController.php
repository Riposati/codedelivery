<?php

namespace codedelivery\Http\Controllers;

use codedelivery\Http\Requests\AdminCategoryRequest;
use codedelivery\Models\Category;
use codedelivery\Repositories\CategoryRepository;

use codedelivery\Http\Requests\AdminCategoryRequests;

class CategoriesController extends Controller
{
    private $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(CategoryRepository $repository)
    {
        $categories = $repository->orderBy('id', 'asc')->paginate();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request)
    {
        $this->repository->create($request->all());
        return redirect()->route('admin.categorias.index');
    }

    public function edit($idCategoria){

        $categoria = $this->repository->find($idCategoria);
        return view('admin.categories.edit' , compact('categoria'));
    }

    public function update(AdminCategoryRequest $request){

        $this->repository->find($request->idCategoria)->update($request->all());
        return redirect()->route('admin.categorias.index');
    }

    public function delete($idCategoria){

        /*
        /*  limpar primeiro a lista de dependencias (produtos com chave estrangeira pra categoria)
         *  entre as entidades "delete on cascade"
        */
        $this->repository->find($idCategoria)->products()->delete();
        $this->repository->find($idCategoria)->delete();

        return redirect()->route('admin.categorias.index');
    }
}

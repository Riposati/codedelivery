<?php

namespace codedelivery\Http\Controllers;

use codedelivery\Http\Requests\AdminProductRequest;
use codedelivery\Models\Product;
use codedelivery\Models\Category;
use codedelivery\Repositories\ProductRepository;
use codedelivery\Repositories\CategoryRepository;

class ProductsController extends Controller
{
    private $repository;
    private $categoryRepository;

    public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(ProductRepository $repository)
    {
        $products = $repository->orderBy('id', 'asc')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->listas();
        return view('admin.products.create' , compact('categories'));
    }

    public function store(AdminProductRequest $request)
    {
        $this->repository->create($request->all());
        return redirect()->route('admin.produtos.index');
    }

    public function edit($idProduto){

        $categories = $this->categoryRepository->listas();
        $produto = $this->repository->find($idProduto);

        return view('admin.products.edit' , compact('produto' , 'categories'));
    }

    public function update(AdminProductRequest $request){

        $this->repository->find($request->idProduto)->update($request->all());
        return redirect()->route('admin.produtos.index');
    }

    public function delete($idProduto){

        $this->repository->delete($idProduto);
        return redirect()->route('admin.produtos.index');
    }
}

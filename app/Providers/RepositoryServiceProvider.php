<?php

namespace codedelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //trabalhar com implementação abstrata, injetando o que estamos registrando em nosso provider
        $this->app->bind(

            'codedelivery\Repositories\CategoryRepository',
            'codedelivery\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(

            'codedelivery\Repositories\ProductRepository',
            'codedelivery\Repositories\ProductRepositoryEloquent'
        );

        /*$this->app->bind(

            'codedelivery\Repositories\UserRepository',
            'codedelivery\Repositories\UserRepositoryEloquent'
        );*/

        $this->app->bind(

            'codedelivery\Repositories\ClientsRepository',
            'codedelivery\Repositories\ClientsRepositoryEloquent'
        );

        $this->app->bind(
            'codedelivery\Repositories\OrderRepository',
            'codedelivery\Repositories\OrderRepositoryEloquent'
        );

        $this->app->bind(
            'codedelivery\Repositories\UserRepository',
            'codedelivery\Repositories\UserRepositoryEloquent'
        );
    }
}

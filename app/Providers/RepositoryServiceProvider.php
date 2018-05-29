<?php

namespace CodeFlix\Providers;


use CodeFlix\Models\Serie;
use CodeFlix\Repositories\CategoryRepository;
use CodeFlix\Repositories\CategoryRepositoryEloquent;
use CodeFlix\Repositories\SerieRepository;
use CodeFlix\Repositories\SerieRepositoryEloquent;
use CodeFlix\Repositories\UserRepository;
use CodeFlix\Repositories\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(CategoryRepository::class, CategoryRepositoryEloquent::class);
        $this->app->bind(SerieRepository::class, SerieRepositoryEloquent::class);

        //:end-bindings:
    }
}

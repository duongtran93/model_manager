<?php

namespace App\Providers;

use App\Reprositories\eloquent\ModelEloquentRepository;
use App\Reprositories\ModelRepositoryInterface;
use App\Service\imple\ModelService;
use App\Service\ModelServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ModelServiceInterface::class, ModelService::class);
        $this->app->singleton(ModelRepositoryInterface::class, ModelEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

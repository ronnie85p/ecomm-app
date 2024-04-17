<?php

namespace App\Providers;

use App\Modules\Dashboard\Interfaces\ExampleInterface;
use App\Modules\Dashboard\Repositories\ExampleRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @var string[]
     */
    protected $repositories = [
        ExampleInterface::class => ExampleRepository::class,
        ExampleTypeInterface::class => ExampleTypeRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $repository) {
            $this->app->bind($interface, function ($app) use ($repository) {
                return new $repository;
            });
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
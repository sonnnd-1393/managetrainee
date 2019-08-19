<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{

    protected static $repositories = [
        'home' => [
            \App\Repo\HomeRepositoryInterface::class,
            \App\Repo\HomeRepository::class,
        ]
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::$repositories as $repository) {
            $this->app->singleton(
                $repository[0],
                $repository[1]
            );
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

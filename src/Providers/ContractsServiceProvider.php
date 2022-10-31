<?php

namespace Miotoloji\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Miotoloji\Modules\Contracts\RepositoryInterface;
use Miotoloji\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}

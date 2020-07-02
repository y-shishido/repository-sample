<?php

namespace App\Providers;

use App\Repositories\SampleARepository;
use App\Repositories\SampleBRepository;
use App\Repositories\SampleRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(SampleRepositoryInterface::class, SampleARepository::class);
        // 切り替える
//        $this->app->bind(SampleRepositoryInterface::class, SampleBRepository::class);
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

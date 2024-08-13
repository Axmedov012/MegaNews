<?php

namespace App\Providers;

use App\Interfaces\TeamInterface;
use App\Repositories\TeamRepository;
use App\Services\TeamService;
use Illuminate\Support\ServiceProvider;

class TeamRepositoryProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(TeamInterface::class,TeamRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

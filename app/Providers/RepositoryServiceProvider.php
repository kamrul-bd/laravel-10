<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerBindings();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    private function registerBindings(): void
    {
        $repos = [
            'Product',
        ];

        if (!empty($repos)) {
            foreach ($repos as $repo) {
                $this->app->bind("App\\Repositories\\{$repo}\\{$repo}Interface", "App\\Repositories\\{$repo}\\{$repo}Repository");
            }
        }
    }
}

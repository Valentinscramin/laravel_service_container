<?php

namespace App\Providers;

use App\Interfaces\PersonTypesInterface;
use App\Services\CompanyPersonService;
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
        $this->app->bind(PersonTypesInterface::class, function () {
            return new CompanyPersonService();
        });
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

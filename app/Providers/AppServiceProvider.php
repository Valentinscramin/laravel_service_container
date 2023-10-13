<?php

namespace App\Providers;

use App\Interfaces\PersonTypesInterface;
use App\Services\CompanyPersonService;
use App\Services\FisicalPersonService;
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
            // return new FisicalPersonService();
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

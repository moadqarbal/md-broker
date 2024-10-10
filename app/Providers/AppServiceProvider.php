<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrapFive();
        Blade::component('admin.acomponents.alayout', 'alayout');
        Blade::component('admin.acomponents.search-user', 'search-user');
        Blade::component('admin.acomponents.all-users-cards', 'all-users-cards');
        Blade::component('admin.acomponents.successmessage', 'successmessage');
        Blade::component('admin.acomponents.errormessage', 'errormessage');
    }
}

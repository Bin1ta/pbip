<?php

namespace App\Providers;

use App\Models\BidSetting;
use App\Models\DocumentCategory;
use App\Models\Employee;
use App\Models\Menu;
use App\Models\OfficeDetail;
use App\Models\SubDivision\SubDivisionEmployee;
use App\Observers\DocumentCategoryObserver;
use App\Observers\EmployeeObserver;
use App\Observers\MenuObserver;
use App\Observers\OfficeDetailObserver;
use App\Observers\SubDivisionEmployeeObserver;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Employee::observe(EmployeeObserver::class);
        Menu::observe(MenuObserver::class);
        OfficeDetail::observe(OfficeDetailObserver::class);
        SubDivisionEmployee::observe(SubDivisionEmployeeObserver::class);
        DocumentCategory::observe(DocumentCategoryObserver::class);
        View::composer('*', function ($view) {
            $view->with('bidSetting', BidSetting::first());
        });
    }
}

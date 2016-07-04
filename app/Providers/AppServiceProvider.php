<?php

namespace App\Providers;

use App\Http\ViewComposer\MakeModelForm;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('view')->composer(
            ['cms/admin/archivos/list'],
            MakeModelForm::class


        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

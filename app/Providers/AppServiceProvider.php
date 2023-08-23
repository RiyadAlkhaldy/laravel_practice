<?php

namespace App\Providers;

use App\Models\Test;
use App\Observers\TestObserver;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as MyView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        Test::observe(new TestObserver);
//        Test::created(function (Test $test){
//            $test->name = "new name";
//            $test->save();
//        });
        View::composer('index',function (MyView $myVar){
            return $myVar->with(['myVar'=>'My varible with composer ']);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}

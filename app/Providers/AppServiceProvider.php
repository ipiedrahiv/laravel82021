<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use Event;

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
        //
        if(env('APP_ENV') == 'local') {
            DB::connection()->enableQueryLog();
            Event::listen(RequestHandled::class, function ($event){
                if($event->$request->has('sql-debug')){
                    $queries = DB::getQueryLog();
                    dd($queries);
                }
            });
        }
        Schema::defaultStringLength(191);
    }
}

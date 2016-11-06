<?php

namespace App\Providers;

use App\Overview;
use App\Tours;
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
        view()->composer('front.layouts._footer',function($view){

            $info=Overview::first();
            $view->with('info',$info);
        });

        view()->composer('front.layouts._map',function($view){

            $downtowns=Tours::where('location_id', '1')->take(3)->get();
            $midWests=Tours::where('location_id', '4')->take(3)->get();
            $calligraphies=Tours::where('location_id', '3')->take(3)->get();
            $nantuns=Tours::where('location_id', '2')->take(3)->get();
            $wufangs=Tours::where('location_id', '5')->take(3)->get();

            $map= new \stdClass();
            $map->downtowns=$downtowns;
            $map->midWests=$midWests;
            $map->calligraphies=$calligraphies;
            $map->nantuns=$nantuns;
            $map->wufangs=$wufangs;

            $view->with('map',$map);
        });
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

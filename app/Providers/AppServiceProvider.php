<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use View;
use App\Models\Content;

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
        View::composer('*', function($view)
        {

           
           
            

            $allContent = Content::where('status','>', 0)->orderBy('id','asc')->get();


            // dd($allContent);
            $view->with('allContent', $allContent);
    
            
        });
    }
}

<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Productimage;
use App\Blog;
use DB;
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
        Schema::defaultStringLength(191);

            $productimage =Productimage::orderBy('id','DESC')
            ->get();
             view()->share(compact('productimage'));

            $blogs =Blog::orderBy('id','DESC')
            ->orderBy('id','DESC')
            ->limit(3)
            ->get();
             view()->share(compact('blogs'));

    }
}

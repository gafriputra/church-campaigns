<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        // dynamic content
        $path = 'app/public/files/shares/content.json';
        if (file_exists(storage_path($path))) {
            $content = json_decode(file_get_contents(storage_path($path)), true);
            config(['content' => $content]);
        }
        Paginator::useBootstrap();
    }
}

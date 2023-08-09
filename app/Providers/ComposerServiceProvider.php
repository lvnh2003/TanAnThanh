<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\News;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $data = News::all(); // Lấy dữ liệu từ model News (hoặc từ cache như đã thảo luận trong câu trước)
            $view->with('data', $data);
        });
    }
}

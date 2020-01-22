<?php

namespace App\Providers;

use App\Http\View\Composers\Admin\CategoryComposer;
use App\Http\View\Composers\CategoriesComposer;
use App\Http\View\Composers\PostsComposer;
use App\Http\View\Composers\TagsComposer;
use App\Http\View\Composers\UsersComposer;
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
        View::composer('layouts.partials.tags.*', TagsComposer::class);
        View::composer('layouts.partials.categories.*', CategoriesComposer::class);
        View::composer('layouts.partials.posts.*', PostsComposer::class);
        View::composer('layouts.partials.header', UsersComposer::class);
        // View::composer('admin.categories.form', CategoryComposer::class);
    }
}

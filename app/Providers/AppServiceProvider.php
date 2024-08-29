<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Books;
use App\Models\Departments;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //?s use in media morph
        Relation::enforceMorphMap([
            'Books'       => Books::class,
            'User'        => User::class,
            'Departments' => Departments::class,
            'Admin'       => Admin::class
        ]);
    }
}

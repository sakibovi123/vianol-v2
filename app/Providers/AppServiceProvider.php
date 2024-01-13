<?php

namespace App\Providers;

use App\Http\Interfaces\CategoryInterface;
use App\Http\Interfaces\GalleryInterface;
use App\Http\Interfaces\ProductInterface;
use App\Http\Interfaces\RoleInterface;
use App\Http\Interfaces\SupplierInterface;
use App\Http\Interfaces\UserInterface;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\GalleryRepository;
use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\RoleRepository;
use App\Http\Repositories\SupplierRepository;
use App\Http\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RoleInterface::class, RoleRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(SupplierInterface::class, SupplierRepository::class);
        $this->app->bind(GalleryInterface::class, GalleryRepository::class);
        $this->app->bind(ProductInterface::class, ProductRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

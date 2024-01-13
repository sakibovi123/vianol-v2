<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// authentication routes
Route::get("/register", [ \App\Http\Controllers\auth\AuthController::class, "register_template" ])->name("register_template");
Route::post("/registration", [ \App\Http\Controllers\auth\AuthController::class, "register" ])->name("register");
Route::get("/login", [ \App\Http\Controllers\auth\AuthController::class, "login_template" ])->name("login_template");
Route::post("/login", [ \App\Http\Controllers\auth\AuthController::class, "login" ])->name("login");


Route::middleware(['auth'])->group(function () {
    // main route
    Route::get("/", [ App\Http\Controllers\DashboardController::class, "index" ])->name("main");

    // providers
    Route::get("/providers", [ App\Http\Controllers\SupplierController::class, "index" ])->name("providers");
    Route::get("/create-provider", [ App\Http\Controllers\SupplierController::class, "create" ])->name("create_provider");
    Route::get("/fetch-provider/{id}/", [ App\Http\Controllers\SupplierController::class, "show" ])->name("fetch_provider");
    Route::post("/save-provider", [ App\Http\Controllers\SupplierController::class, "store" ])->name("store_provider");
    Route::put("/update-provider/{id}/", [ \App\Http\Controllers\SupplierController::class, "update" ])->name("update_provider");
    Route::delete("/delete-prodiver/{id}/", [ \App\Http\Controllers\SupplierController::class, "destroy" ])->name("destroy_supplier");

    // Routes for gallery
    Route::get("/list-gallery", [ GalleryController::class, "index" ])->name("gallery_index");
    Route::get("/create-gallery", [ GalleryController::class, "create" ])->name("create_gallery");
    Route::get("/update-gallery/{id}/", [ GalleryController::class, "edit" ])->name("update_gallery");

    // categories
    Route::get("/categories", [ CategoryController::class, "index" ])->name("category_index");
    Route::get("/create-category", [ CategoryController::class, "create" ])->name("category_create");
    Route::post("/store-category", [ CategoryController::class, "store" ])->name("store_category");
    Route::get("/edit-category/{id}/", [ CategoryController::class, "edit" ])->name("edit_category");
    Route::put("/update-category/{id}/", [ CategoryController::class, "update" ])->name("update_category");
    Route::delete("/delete-category/{id}/", [ CategoryController::class, "destroy" ])->name("delete_category");

    // products
    Route::get("/products", [ ProductController::class, "index" ])->name("products_index");
    Route::get("/create-product", [ ProductController::class, "create" ])->name("create_product");
    Route::post("/store-product", [ ProductController::class, "store" ])->name("store_product");
    Route::get("/edit-product/{id}/", [ ProductController::class, "edit" ])->name("edit_product");
    Route::put("/update-product/{id}/", [ ProductController::class, "update" ])->name("update_product");
    Route::delete("/delete-product/{id}/", [ ProductController::class, "destroy" ])->name("delete_product");
});


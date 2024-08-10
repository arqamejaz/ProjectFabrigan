<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\MediaController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SettingsController;
use App\Http\Controllers\backend\AccessoryController;
use App\Http\Controllers\backend\CatalogueController;
use App\Http\Controllers\backend\DashboardController;

/* Backend admin panel Routes*/

Route::prefix('admin')->group(function () {
    Route::middleware('web')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/listaccessories', [AccessoryController::class, 'index'])->name('admin.listaccessories');
        Route::get('/listevents', [EventController::class, 'index'])->name('admin.listevents');
        Route::get('/listcategories', [CategoryController::class, 'index'])->name('admin.listcategories');
        Route::get('/listproducts', [ProductController::class, 'index'])->name('admin.listproducts');
        Route::get('/listmedia', [MediaController::class, 'index'])->name('admin.listmedia');
        Route::get('/listcatalogues', [CatalogueController::class, 'index'])->name('admin.listcatalogues');
        Route::get('/listsliders', [SliderController::class, 'index'])->name('admin.listsliders');

        Route::get('/addaccessory', [AccessoryController::class, 'addnew'])->name('admin.addaccessory');
        Route::get('/addevent', [EventController::class, 'addnew'])->name('admin.addevent');
        Route::get('/addcategory', [CategoryController::class, 'addnew'])->name('admin.addcategory');
        Route::get('/addproduct', [ProductController::class, 'addnew'])->name('admin.addproduct');
        Route::get('/addmedia', [MediaController::class, 'addnew'])->name('admin.addmedia');
        Route::get('/addcatalogue', [CatalogueController::class, 'addnew'])->name('admin.addcatalogue');
        Route::get('/addslider', [SliderController::class, 'addnew'])->name('admin.addslider');
        Route::get('/addchooseus', [SliderController::class, 'addnew'])->name('admin.choose');

        Route::get('/editaccessory/{id}', [AccessoryController::class, 'edit'])->name('admin.editaccessory');
        Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])->name('admin.editcategory');
        Route::get('/editproduct/{id}', [ProductController::class, 'edit'])->name('admin.editproduct');
        Route::get('/editmedia/{id}', [MediaController::class, 'edit'])->name('admin.editmedia');
        Route::get('/editevent/{id}', [EventController::class, 'edit'])->name('admin.editevent');
        Route::get('/editslider/{id}', [sliderController::class, 'edit'])->name('admin.editslider');

        Route::post('/storeaccessory', [AccessoryController::class, 'store'])->name('accessory.store');
        Route::post('/storecategory', [CategoryController::class, 'store'])->name('category.store');
        Route::post('/storeproduct', [ProductController::class, 'store'])->name('product.store');
        Route::post('/storemedia', [MediaController::class, 'store'])->name('media.store');
        Route::post('/storeevent', [EventController::class, 'store'])->name('event.store');
        Route::post('/storeslider', [SliderController::class, 'store'])->name('slider.store');
        Route::post('/storecatalogue', [CatalogueController::class, 'store'])->name('catalogue.store');

        Route::put('/updateaccessory/{id}', [AccessoryController::class, 'update'])->name('accessory.update');
        Route::put('/updatecategory/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::put('/updateproduct/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::put('/updatemedia/{id}', [MediaController::class, 'update'])->name('media.update');
        Route::put('/updateevent/{id}', [EventController::class, 'update'])->name('event.update');
        Route::put('/aboutus', [AboutController::class, 'update'])->name('aboutus.update');
        Route::put('/contactus', [ContactController::class, 'update'])->name('contactus.update');
        Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');

        Route::delete('/deleteaccessory/{id}', [AccessoryController::class, 'delete'])->name('accessory.delete');
        Route::delete('/deletecategory/{id}', [CategoryController::class, 'delete'])->name('category.delete');
        Route::delete('/deleteproduct/{id}', [ProductController::class, 'delete'])->name('product.delete');
        Route::delete('/deletemedia/{id}', [MediaController::class, 'delete'])->name('media.delete');
        Route::delete('/deleteevent/{id}', [EventController::class, 'delete'])->name('event.delete');
        Route::delete('/deleteslider/{id}', [SliderController::class, 'delete'])->name('slider.delete');
        Route::delete('/deletecatalogue/{id}', [CatalogueController::class, 'delete'])->name('catalogue.delete');

        Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
        Route::get('/aboutus', [AboutController::class, 'index'])->name('admin.aboutus');
        Route::get('/contactus', [ContactController::class, 'index'])->name('admin.contactus');
    });
});

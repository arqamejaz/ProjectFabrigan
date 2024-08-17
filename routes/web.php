 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\frontend\AboutPageController;
use App\Http\Controllers\frontend\EventPageController;
use App\Http\Controllers\frontend\MediaPageController;
use App\Http\Controllers\frontend\ContactPageController;
use App\Http\Controllers\frontend\CategoryPageController;
use App\Http\Controllers\frontend\AccessoryPageController;
use App\Http\Controllers\frontend\CataloguePageController;
use App\Http\Controllers\frontend\ProductPageController;

/* Frontend website Routes*/
Route::get('/', [HomePageController::class, 'index']);
Route::get('/about', [AboutPageController::class, 'index']);
Route::get('/contact', [ContactPageController::class, 'index']);
Route::get('/catalogue', [CataloguePageController::class, 'index']);
Route::get('/category/{id}', [CategoryPageController::class, 'index']);
Route::get('/event', [EventPageController::class, 'index']);
Route::get('/media', [MediaPageController::class, 'index']);
Route::get('/accessory/{id}', [AccessoryPageController::class, 'index']);
Route::get('/products', [ProductPageController::class, 'index']);





require __DIR__.'/backend.php';
require __DIR__.'/auth.php';

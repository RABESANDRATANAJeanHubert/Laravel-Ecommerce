<?php

use App\Http\Livewire\AcceuilComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddHomeSlider;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditHomeSlider;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSlider;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', AcceuilComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/checkout', CheckoutComponent::class);
Route::get('/product/{slug}', DetailComponent::class)->name('product.detail');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//For Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/user/dashboard/', UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard/', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/addcategoring/add', AdminAddCategoryComponent::class)->name('admin.addcategories');
    Route::get('/admin/addcategoring/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategories');
    Route::get('/admin/product', AdminProductComponent::class)->name('admin.product');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');

    Route::get('/admin/slider', AdminHomeSlider::class)->name('admin.homeSlide');
    Route::get('/admin/slider/add', AdminAddHomeSlider::class)->name('admin.AddHomeSlide');
    Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeSlider::class)->name('admin.editHomeSlide');
});
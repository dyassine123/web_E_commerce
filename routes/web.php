<?php
use Illuminate\Support\Facades\Route;
use App\Http\livewire\HomeComponent;
use App\Http\livewire\ShopComponent;
use App\Http\livewire\CartComponent;
use App\Http\livewire\SearchComponent;
use App\Http\livewire\CategoryComponent;
use App\Http\livewire\DetailsComponent;
use App\Http\livewire\ThankyouComponent;
use App\Http\livewire\ContatComponent;
use App\Http\livewire\User\UserDashboardComponent;
use App\Http\livewire\Admin\AdminDashboardComponent;
use App\Http\livewire\Admin\AdminProductComponent;
use App\Http\livewire\Admin\AdminAddProductComponent;
use App\Http\livewire\Admin\AdminEditProductComponent;
use App\Http\livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminClientComponent;
use App\Http\Livewire\Admin\AdminAddClientComponent;
use App\Http\Livewire\Admin\AdminContatComponent;
use App\Http\livewire\CheckoutComponent;

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

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', HomeComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('search', SearchComponent::class)->name('product.search');
Route::get('thank-you',ThankyouComponent::class)->name('thankyou');
Route::get('contact-us',ContatComponent::class)->name('contact');

// For user or customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// For admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories'); 
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory'); // Corrected the URL here
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory'); // Corrected the URL here
    
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproducts');
    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproducts');

    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slider_id}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider'); // Corrected the URL here
    
    Route::get('/admin/orders',AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/users',AdminClientComponent::class)->name('admin.users');
    Route::get('/admin/users/add',AdminAddClientComponent::class)->name('admin.addusers');
    Route::get('/admin/contact-us',AdminContatComponent::class)->name('admin.contact');
});


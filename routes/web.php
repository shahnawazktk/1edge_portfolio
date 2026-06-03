<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');
Route::get('/product/1school', [HomeController::class, 'product1school'])->name('product.1school');
Route::get('/product/1station', [HomeController::class, 'product1station'])->name('product.1station');
Route::get('/product/1hospital', [HomeController::class, 'product1hospital'])->name('product.1hospital');
Route::get('/product/1dine', [HomeController::class, 'product1dine'])->name('product.1dine');

// Temporary route to seed stats (remove after seeding)
Route::get('/seed-stats', function () {
    \App\Models\Stat::truncate();
    
    $stats = [
        ['title' => 'Products', 'value' => '1200+', 'order' => 1, 'is_active' => true],
        ['title' => 'Clients', 'value' => '80+', 'order' => 2, 'is_active' => true],
        ['title' => 'Customer Satisfaction', 'value' => '98%', 'order' => 3, 'is_active' => true],
        ['title' => 'Years Experience', 'value' => '8+', 'order' => 4, 'is_active' => true],
    ];
    
    foreach ($stats as $stat) {
        \App\Models\Stat::create($stat);
    }
    
    return 'Stats seeded successfully!';
})->name('seed.stats');

// Responsive check page
Route::get('/check-responsive', function () {
    return response()->file(public_path('check-responsive.html'));
})->name('check.responsive');



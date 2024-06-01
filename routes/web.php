<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Services\BarcodeGenerator;
use Barryvdh\DomPDF\Facade\Pdf;

Route::view('/', 'welcome');
Route::get('/barcode', function(){
    // return "wel";
    $barcode = DNS1D::getBarcodeSVG('COBA-1243', 'C128A', 1, 50);

    $product = new Product();
    $product->name = "Tas Tayo";
    $product->sell_price = 34000;
    $pdf = Pdf::loadView("products.barcode", ["barcode" => $barcode, "product" => $product ]);
    return $pdf->stream();
    // return view("products.barcode", ["barcode" => $barcode, "product" => $product ]);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

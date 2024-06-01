<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Services\BarcodeGenerator;
use Barryvdh\DomPDF\Facade\Pdf;

Route::view('/', 'welcome');
Route::get('/barcode', function(){
    // return "wel";
    $barcode = DNS1D::getBarcodeSVG('COBA-1243', 'C128A', 1, 50);
    $b = new BarcodeGenerator();

    // $barcode = $b->getBarcodeSVG('ABC123', 'C128A',2,50,array(1,1,1), true);

    $product = new Product();
    $product->name = "Tas Tayo";
    $product->sell_price = 34000;
    $pdf = Pdf::loadView("products.barcode", ["barcode" => $barcode, "product" => $product ]);
    return $pdf->stream();
    // dd($barcode);
    // return view("products.barcode", ["barcode" => $barcode, "product" => $product ]);
    // return DNS1D::getBarcodeSVG('4445645656', 'C128A');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

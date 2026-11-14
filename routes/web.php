<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::view('/', 'User.index')->name('home');

$pages = [
    'about' => 'User.about',
    'contact' => 'User.contact',
    'gallery' => 'User.gallery',
    'privacy' => 'User.privacy',
    'product-details' => 'User.product-details',
    'products' => 'User.products',
    'quality' => 'User.quality',
    'terms' => 'User.terms',
    'videos' => 'User.videos',
    'chemicals' => 'User.chemical-supply',
    'uttara-chemicals' => 'User.uttara-chemicals',
    'dow-international' => 'User.dow-international',
    'managingdirector' => 'User.managingdirector',
    'chairman' => 'User.chairman',
];

Route::redirect('/index.html', '/', 301);

foreach ($pages as $slug => $view) {
    Route::view('/'.$slug, $view)->name($slug);
    Route::redirect('/'.$slug.'.html', '/'.$slug, 301);
}

Route::get('/{page}', function (string $page) {
    $view = 'User.'.$page;

    abort_unless(View::exists($view), 404);

    return view($view);
})->where('page', '[A-Za-z0-9-]+');

<?php
use App\Http\Controllers\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "halo ariqo";
});
Route::get('/dua', function () {
    return view('detailresep');
});

Route ::get('/tiga',[HaloController::class,'mangga']);

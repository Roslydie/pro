<?php

//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\persController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\listeController;
use App\Http\Controllers\PdfController;
//use Termwind\Components\Hr;


Route::get('/ajout',[persController::class,'inscriptionForm']);
Route::post('/pers', [persController::class,'traitement_log']);
Route::get('/login', [loginController::class,'showlogin'])->name('login');
Route::middleware(['auth'])->group(function (){
   
    Route::post('/traitement', [loginController::class,'validationlogin'])->name('affichage');
});



Route::get('/affichage', [persController::class, 'afficher']);
Route::post('/user/{nom}/{prenom}/{profession}', [persController::class, 'show']);


//Route::get('/affichage', [loginController::class,'show'])->middleware('auth');


Route::get('/admin', [LoginAdminController::class,'show_admin'])->name('admin');
Route::get('/liste', [listeController::class, 'liste'])->name('liste');

Route::post('/liste', [listeController::class, 'index'])->name('liste');


Route::post('/upload-pdf', [PdfController::class, 'upload']);





Route::get('/pers', function () {
    return view('perso');
});

 
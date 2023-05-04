<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Models\Examen;
use App\Models\Solde;
use Illuminate\Support\Facades\Auth;

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
Route::get('/notes',[SujetController::class,'note'])->middleware('auth')->name('note');
Route::post('/dashboard/{actions}',[AdminController::class,'store'])->name('store'); //enregistrement des sujet
Route::post('/image-question',[AdminController::class,'uploadimage'])->name('questionimage');
Route::post('/dashboard/question/update',[AdminController::class,'questionupdate'])->name('question.update'); //modification des question
Route::post('/dashboard/propo/update',[AdminController::class,'propoupdate'])->name('propoupdate'); //modif propo
Route::post('/dashboard/sujet/update',[AdminController::class,'sujetupdate'])->name('sujet.update'); //modif propo
Route::get('/compo/{title}/{id}',[SujetController::class,'compo'])->middleware('auth')->name('compo'); // page de compo
Route::post('/correction/{id}',[SujetController::class,'correction'])->name('correction')->whereNumber('id'); // page de correction
Route::get('/',[ViewController::class,'index'])->name('index'); // page d'accueil
Route::get('/sujet',[ViewController::class,'sujet'])->name('sujet'); //listing des sujets
Route::get('/sujet/{ue}',[ViewController::class,'sujetue'])->name('sujet.show'); //listing par UE
Route::get('/abonnement/{type}',[ViewController::class,'abonnement'])->whereAlpha('type')->name('abonnement')->middleware('auth'); //page d'abonnement
Route::get('/dashboard/{actions}',[AdminController::class,'todo'])->name('todo'); //dashbord
Route::post('/abonnement...',[UserController::class,'abonnement'])->name('user.abon');//route d'abonnement
Route::get('/code-list',[AdminController::class,'codelist'])->name('code.list'); //liste des code d'abonnemen
Route::get('/demo',[SujetController::class,'demo'])->name('demo'); // page de correction









Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  $montant = 0;
  $soldes = Solde::all();
  foreach($soldes as $solde)
  {
    $montant +=$solde->montant;
  }
    if(Gate::allows('access-admin')){
        return view('admin.dashboard',['montant' => $montant.' CFA']);
      }else{
    return view('dashboard',[
    ]);
}
})->name('dashboard'); //gestion du solde 


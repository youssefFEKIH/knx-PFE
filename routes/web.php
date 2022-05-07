<?php

use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\ExpController;
use App\Http\Controllers\CrtController;
use App\Http\Controllers\EduController;




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

Route::get('/', [membreController::class, 'index3'])->name('pagedaccueil');
Route::get('/home', [membreController::class, 'index'])->name('home');
Route::get('/home/connect', function () {return view('Front.index');})->name('homeconnect');
Route::get('/cours', function () {return view('Front.cours');})->name('cours');
Route::get('/projets', [ProjetController::class, 'index2'])->name('projets');
Route::get('/inscriptionget', function () {return view('Front.inscription');})->name('inscriptionget');
Route::get('/connexion', function () {return view('Front.connexion');})->name('connexion');
Route::get('/compte', function () { return view('Front.tableaudebordmembre');})->name('profil');
Route::get('/deconnexion', [MembreController::class, 'deconnexion']);



Route::post('/home', [MembreController::class, 'store'])->name('home');
Route::post('/cours', [MembreController::class, 'store'])->name('cours');
Route::post('/projets', [MembreController::class, 'store'])->name('projets');
Route::post('/inscriptionget', [MembreController::class, 'store'])->name('inscription');
Route::post('/home/connect', [MembreController::class, 'connect'])->name('homeconnect');


/*
|--------------------------------------------------------------------------
| KNX tunisie
|--------------------------------------------------------------------------
*/
Route::get('/knxtunisie-com', function () {return view('knxtunisie.knxtunisie-com');})->name('knxtunisie-com');
Route::get('/knxtunisie-acceuil', function () {return view('knxtunisie.knxtunisie-acceuil');})->name('knxtunisie-acceuil');
Route::get('/knx', function () {return view('knxtunisie.knx');})->name('knx');
Route::get('/knxtunisie-logiciel', function () {return view('knxtunisie.knxtunisie-logiciel');})->name('knxtunisie-logiciel');
Route::get('/knxtunisie-doc', function () {return view('knxtunisie.knxtunisie-doc');})->name('knxtunisie-doc');
Route::get('/knxtunisie-formation', function () {return view('knxtunisie.knxtunisie-formation');})->name('knxtunisie-formation');
Route::get('/knxtunisie-actus', function () {return view('knxtunisie.knxtunisie-actus');})->name('knxtunisie-actus');
Route::get('/knxtunisie-contact', function () {return view('knxtunisie.knxtunisie-contact');})->name('knxtunisie-contact');
Route::get('/knxtunisie-contact', function () {return view('knxtunisie.knxtunisie-contact');})->name('knxtunisie-contact');

/*
|--------------------------------------------------------------------------
| Formateur tunisie
|--------------------------------------------------------------------------
*/
Route::get('/Formateur',[CvController::class, 'index'] )->name('Formateur');


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::get('/deconnexionAdmin', [AdminController::class, 'deconnexion']);
Route::get('/AdminDashboard', [MembreController::class, 'show'])->name('AdminDashboard');
Route::get('/AdminDashboard/projet', [ProjetController::class, 'index'])->name('AdminDashboard/projet');
Route::get('/AdminDashboard/cv', [CvController::class, 'CvFormateur'])->name('AdminDashboard/cv');

Route::post('/AdminDashboard/Formateur', [MembreController::class, 'addF'])->name('AddFormateur');
Route::post('/destroy/{id}/', [MembreController::class, 'destroy'])->name('supprimerF');
Route::post('/destroy/{id}/', [ProjetController::class, 'destroy'])->name('supprimerP');
Route::post('/AdminDashboard/projet',  [ProjetController::class, 'create'])->name('AddProjet');
Route::post('/AdminDashboard/cv', [CvController::class, 'create']);
Route::post('/AdminDashboard/Edu', [EduController::class, 'create']);
Route::post('/AdminDashboard/Exp', [ExpController::class, 'create']);
Route::post('/AdminDashboard/Crt', [CrtController::class, 'create']);
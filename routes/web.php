<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LawfirmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CivilstateController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\WelcomeController;

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

//Route::get('/', function() {return view('welcome');});
//Route::get('welcome', [WelcomeController::class, 'index']);

Route::get('/', function () {return view('accueil');})->name('accueil');

Route::get('users',[UserController::class, 'users'])->name('users.index');
Route::get('users/create',[UserController::class, 'create'])->name('users.create');
Route::post('users/store',[UserController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}',[UserController::class, 'edit'])->name('users.edit');
Route::post('users/update/{id}',[UserController::class, 'update'])->name('users.update');
Route::post('users/delete/{id}',[UserController::class, 'destroy'])->name('users.delete');
Route::get('users/{id}',[UserController::class, 'show'])->name('users.show');

Route::get('roles',[RoleController::class, 'roles'])->name('roles.index');
Route::get('roles/create',[RoleController::class, 'create'])->name('roles.create');
Route::post('roles/store',[RoleController::class, 'store'])->name('roles.store');
Route::get('roles/edit/{id}',[RoleController::class, 'edit'])->name('roles.edit');
Route::post('roles/update/{id}',[RoleController::class, 'update'])->name('roles.update');
Route::post('roles/delete/{id}',[RoleController::class, 'destroy'])->name('roles.delete');
Route::get('roles/{id}',[RoleController::class, 'show'])->name('roles.show');

Route::get('nationalities',[NationalityController::class, 'nationalities'])->name('nationalities.index');
Route::get('nationalities/create',[NationalityController::class, 'create'])->name('nationalities.create');
Route::post('nationalities/store',[NationalityController::class, 'store'])->name('nationalities.store');
Route::get('nationalities/edit/{id}',[NationalityController::class, 'edit'])->name('nationalities.edit');
Route::post('nationalities/update/{id}',[NationalityController::class, 'update'])->name('nationalities.update');
Route::post('nationalities/delete/{id}',[NationalityController::class, 'destroy'])->name('nationalities.delete');
Route::get('nationalities/{id}',[NationalityController::class, 'show'])->name('nationalities.show');

Route::get('lawyers',[LawyerController::class, 'lawyers'])->name('lawyers.index');
Route::get('lawyers/create',[LawyerController::class, 'create'])->name('lawyers.create');
Route::post('lawyers/store',[LawyerController::class, 'store'])->name('lawyers.store');
Route::get('lawyers/edit/{id}',[LawyerController::class, 'edit'])->name('lawyers.edit');
Route::post('lawyers/update/{id}',[LawyerController::class, 'update'])->name('lawyers.update');
Route::post('lawyers/delete/{id}',[LawyerController::class, 'destroy'])->name('lawyers.delete');
Route::get('lawyers/{id}',[LawyerController::class, 'show'])->name('lawyers.show');

Route::get('lawfirms',[LawfirmController::class, 'lawfirms'])->name('lawfirms.index');
Route::get('lawfirms/create',[LawfirmController::class, 'create'])->name('lawfirms.create');
Route::post('lawfirms/store',[LawfirmController::class, 'store'])->name('lawfirms.store');
Route::get('lawfirms/edit/{id}',[LawfirmController::class, 'edit'])->name('lawfirms.edit');
Route::post('lawfirms/update/{id}',[LawfirmController::class, 'update'])->name('lawfirms.update');
Route::post('lawfirms/delete/{id}',[LawfirmController::class, 'destroy'])->name('lawfirms.delete');
Route::get('lawfirms/{id}',[LawfirmController::class, 'show'])->name('lawfirms.show');

Route::get('addresses',[AddressController::class, 'addresses'])->name('addresses.index');
Route::get('addresses/create',[AddressController::class, 'create'])->name('addresses.create');
Route::post('addresses/store',[AddressController::class, 'store'])->name('addresses.store');
Route::get('addresses/edit/{id}',[AddressController::class, 'edit'])->name('addresses.edit');
Route::post('addresses/update/{id}',[AddressController::class, 'update'])->name('addresses.update');
Route::post('addresses/delete/{id}',[AddressController::class, 'destroy'])->name('addresses.delete');
Route::get('addresses/{id}',[AddressController::class, 'show'])->name('addresses.show');

Route::get('civilstates',[CivilstateController::class, 'civilstates'])->name('civilstates.index');
Route::get('civilstates/create',[CivilstateController::class, 'create'])->name('civilstates.create');
Route::post('civilstates/store',[CivilstateController::class, 'store'])->name('civilstates.store');
Route::get('civilstates/edit/{id}',[CivilstateController::class, 'edit'])->name('civilstates.edit');
Route::post('civilstates/update/{id}',[CivilstateController::class, 'update'])->name('civilstates.update');
Route::post('civilstates/delete/{id}',[CivilstateController::class, 'destroy'])->name('civilstates.delete');
Route::get('civilstates/{id}',[CivilstateController::class, 'show'])->name('civilstates.show');

Route::get('contacts',[ContactController::class, 'contacts'])->name('contacts.index');
Route::get('contacts/create',[ContactController::class, 'create'])->name('contacts.create');
Route::post('contacts/store',[ContactController::class, 'store'])->name('contacts.store');
Route::get('contacts/edit/{id}',[ContactController::class, 'edit'])->name('contacts.edit');
Route::post('contacts/update/{id}',[ContactController::class, 'update'])->name('contacts.update');
Route::post('contacts/delete/{id}',[ContactController::class, 'destroy'])->name('contacts.delete');
Route::get('contacts/{id}',[ContactController::class, 'show'])->name('contacts.show');
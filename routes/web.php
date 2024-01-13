<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceParticipantController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\KeynotesController;
use App\Http\Controllers\SponsorsController;

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

Route::get('/', function () {
    return view('index');
})->name('home'); 
Route::get('/date', function () {
    return view('date');
})->name('date'); 
Route::get('/participation', function () {
    return view('participation');
})->name('participation'); 




Route::get('/program', function () {
    return view('program');
})->name('program'); 

Route::get('/guideline', function () {
    return view('guideline');
})->name('guideline'); 

Route::get('/call-for-papers', function () {
    return view('call-for-papers');
})->name('call-for-papers'); 

Route::get('/registration', function () {
    return view('registration');
})->name('registration'); 


Route::get('/social-events', function () {
    return view('social-events');
})->name('social-events'); 


Route::get('/keynotes', function () {
    return view('keynotes/index');
})->name('keynotes'); 

Route::get('/topics', function () {
    return view('topics');
})->name('topics'); 

Route::get('/specialsessions', function () {
    return view('specialsessions');
})->name('specialsessions'); 


Route::get('/studentcontest', function () {
    return view('studentcontest');
})->name('studentcontest'); 

Route::get('/exibitors', function () {
    return view('exibitors');
})->name('exibitors'); 

Route::get('/commitees', function () {
    return view('commitees');
})->name('commitees'); 

Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors'); 

Route::get('/venue', function () {
    return view('venue');
})->name('venue'); 

Route::get('/photosvideos', function () {
    return view('photosvideos.index');
})->name('photosvideos'); 

Route::get('/contact', function () {
    return view('contact');
})->name('contact'); 

Route::get('/blog', function () {
    return view('blog');
})->name('blog'); 

Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single'); 


Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule'); 

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
})->name('dashboard'); 


Route::get('/speakers', function () {
    return view('speakers');
})->name('speakers');

Route::get('/SignIn', function () {
    return view('SignIn');
})->name('SignIn');  

Route::post('/conference/participants', [ConferenceParticipantController::class, 'store'])->name('confirmation');
Route::get('/payement', [PaymentController::class, 'show'])->name('payement');



Route::get('/keynotes', [KeynotesController::class, 'index'])->name('keynotes');

Route::get('/sponsors', [SponsorsController::class, 'index'])->name('sponsors');

Route::get('/photosvideos', [VideoController::class, 'index'])->name('photosvideos');




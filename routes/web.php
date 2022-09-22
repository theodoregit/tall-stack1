<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
    return view('welcome');
});

Route::get('/register', \App\Http\Livewire\Auth\Register::class);

Route::get('/home', function() {
    return view('welcome');
});

Route::post('/contact', function(Request $request){
    $contact = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required'
    ]);

    // Mail::to('tedoteams@gmail.com')->send(new ContactFormMailable($contact));
    return back()->with('success_message', 'We received your message successfully and will get back to you shortly!');
});

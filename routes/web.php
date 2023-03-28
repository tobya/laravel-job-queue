<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmailJob;

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
    return view('send-email');
});

Route::post('/send-email', function () {
    $emailData = request()->validate([
        'to' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    SendEmailJob::dispatch($emailData);

    return redirect('/');
});
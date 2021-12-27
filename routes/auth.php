<?php

use App\Events\PrivateMessageCreated;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisteredController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::group(['middleware' => 'auth'], function () {

    Route::view('/home', 'home.index')
        ->name('home.index');
    Route::view('/home/event', 'home.event')
        ->name('home.event');

    Route::post('home/broadcaster', function () {
        $user = User::find(1);
        broadcast(new PrivateMessageCreated($user, "halo apa kabar"));

        return redirect()
            ->back()
            ->with('flash', <<<EOF
            Private message sended successfully to $user->name by [id]:$user->id
            EOF
        );
    })->name('home.broadcaster');
});


Route::view('/login', 'auth.login')
    ->name('login');
Route::view('/register', 'auth.register')
    ->name('register');

Route::post('/register', RegisteredController::class)
    ->name('register.store');
Route::post('/login', LoginController::class)
    ->name('login.store');
Route::post('/logout', LogoutController::class)
    ->name('logout');

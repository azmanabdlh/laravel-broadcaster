<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        abort_unless(
            Auth::attempt($credentials),
            AuthenticationException::class
        );

        return redirect()
            ->to(RouteServiceProvider::HOME);
    }
}

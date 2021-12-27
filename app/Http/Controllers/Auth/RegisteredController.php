<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisteredController extends Controller
{
    public function __invoke(Request $request)
    {
        $fields = $request->all();

        User::create(
            array_merge($fields, ['password' => bcrypt($fields['password'])])
        );
        return redirect()
            ->route('login');
    }
}

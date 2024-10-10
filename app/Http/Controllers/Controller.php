<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    public function userIsAuthenticated()
    {
        if (!Auth::check()) {
            abort(404);
        }
        return;
    }
}

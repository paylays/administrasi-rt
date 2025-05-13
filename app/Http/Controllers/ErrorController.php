<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function handle(Request $request)
    {
        if ($request->is('admin/*')) {
            return response()->view('admin.pages.error.error-404', [], 404);
        }

        return response()->view('user.pages.error.error-404', [], 404);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error404Admin()
    {
        return view('admin.pages.error.error-404');
    }
    
    public function error404User()
    {
        return view('user.pages.error.error-404');
    }
}

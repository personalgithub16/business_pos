<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Auth;
class LogoutController extends Controller
{
    public function perform()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use App\CaseReport;

class PagesController extends Controller
{
    public function getHomepage()
    {
        if (Auth::check()) {
            // The user is logged in...
            $user = Auth::user();
            return view('home')->with('user',$user);
        }
        return view('home');

    }

}

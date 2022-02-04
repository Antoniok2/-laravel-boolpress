<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function registration() {

        return view('pages.registration');
    }

    public function accesso() {

        return view('pages.login');
    }
}

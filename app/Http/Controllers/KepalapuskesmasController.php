<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalapuskesmasController extends Controller
{
    //
    public function index()
    {

        return view('kepalapuskesmas.dashboard');

    }
}

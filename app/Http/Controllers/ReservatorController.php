<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservatorController extends Controller
{
    //
    public function index()
    {
        return view('reservator.dashboard');
    }

    public function reservasiPendaftaran()
    {
        return view('reservator.pendaftaran');
    }

    public function reservasiPengaturan()
    {
        return view('reservator.pengaturan');
    }
}

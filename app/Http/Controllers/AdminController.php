<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dataruang;
use DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        $use = User::all();
        // $count = DB::table('users')->where('user',$this->id);
        $count = User::sum('email');
        return view('admin.dashboard', compact('use','count'));
    }

    public function adminKelolaAkun()
    {
        $use = User::all();
        return view('admin.KelolaAkun', compact('use'));
    }

    public function adminKelolaRuangAula()
    {
        $ruang = Dataruang::all();
        return view('admin.kelolaruangaula', compact('ruang'));
    }

    public function adminTransaksi()
    {
        return view('admin.Transaksi');
    }

    public function adminLaporan()
    {
        return view('admin.Laporan');
    }
}

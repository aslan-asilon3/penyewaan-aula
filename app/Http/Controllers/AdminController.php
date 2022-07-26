<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dataruang;
use App\Models\Transaksi;
use DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    //
    public function index()
    {
        $use = User::all();
        $sewa = DataRuang::all();
        $transaksi = Transaksi::all();
        // $count = DB::table('users')->where('user',$this->id);
        $count = User::sum('email');
        return view('admin.dashboard', compact('use','count','sewa','transaksi'));
    }

// ==== ADMIN KELOLA AKUN ====

public function adminKelolaAkun()
{
    $use = User::all();
    $userlist = User::distinct()->orderBy('is_admin','asc')->get('is_admin');
    return view('admin.KelolaAkun', compact('use','userlist'));
}

// public function adminKelolaAkunStore(Request $request)
// {
//         $validatedData = $request->validate([
//             'name' => 'required|max:255',
//             'email' => 'required',
//             'is_admin' => 'required',
//             'password' => 'required',
//         ]);
//         $show = User::create($validatedData);

//         return redirect('admin/kelolaakun')->with('success', 'User is successfully saved');
// }

public function adminKelolaAkunExport()
{
    return Excel::download(new UsersExport, 'users.xlsx');
}

public function adminKelolaAkunPDF()
{
    return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
}

// ==== END ADMIN KELOLA AKUN ====

    public function adminKelolaRuangAula()
    {
        $ruang = Dataruang::all();
        return view('admin.kelolaruangaula', compact('ruang'));
    }

    public function adminTransaksi()
    {
        $transaksi = Transaksi::all();
        return view('admin.Transaksi',compact('transaksi'));
    }

    public function adminLaporan()
    {
        return view('admin.Laporan');
    }
}

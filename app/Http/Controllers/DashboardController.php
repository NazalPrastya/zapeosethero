<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Hashids\Hashids;
use App\Models\Admin;
use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $hash = new Hashids();
        $siswa = Auth::guard('user')->user();
        return view('dashboard.index', [
            'siswa' => $siswa,
            'siswas' => User::all(),
            'projects' => Post::all(),
            'admin' => Admin::all(),
            'hash' => $hash
        ]);
    }

    public function saran()
    {
        $sarans = Saran::all();
        return view('/dashboard/saran', compact('sarans'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'sender' => 'required|min:3|max:30',
            'message' => 'required|min:5|max:500',
        ]);

        Saran::create($validate);
        Alert::success('Berhasil', 'Saran diterima');
        return back();
    }

    public function destroy(Saran $saran)
    {
        Saran::destroy($saran->id);
        Alert::success('Berhasil', 'Saran dihapus');
        return redirect('/dashboard/saran');
    }
}

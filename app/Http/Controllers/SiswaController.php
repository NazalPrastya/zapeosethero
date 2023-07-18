<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa.index', [
            'siswas' => User::all()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
// use Dotenv\Exception\ValidationException;

class DashboardSiswaController extends Controller
{

    public function index()
    {
        return view('dashboard.siswa', [
            'siswas' => User::all(),
            'hash' => new Hashids()
        ]);
    }


    public function create()
    {
        return view('dashboard.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5|max:40',
            'kelamin' => 'required',
            'email' => 'required|email|unique:users',
            'instagram' => 'nullable',
            'biodata' => 'nullable'
        ]);
        $validated['image'] = $request->input('image');
        $validated['password'] = bcrypt('password123');
        User::create($validated);
        return redirect('/dashboard/murid');
    }



    public function edit($id)
    {
        $hash = new Hashids();
        return view('dashboard.edit', [
            'siswa' => User::findOrFail($hash->decodeHex($id)),
        ]);
    }


    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|min:5|max:40',
            'kelamin' => 'required',
            'email' => 'required|email',
            'instagram' => 'nullable',
            'image' => 'image|max:2048',
            'biodata' => 'nullable',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage != '/murid/default.png') {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('murid');
        }

        // $validated['image'] = $request->input('image');
        // $validated['password'] = 'password123';
        Alert::success('Berhasil', 'Berhasil Update Profile Mu');
        $user->update($validated);
        return redirect('/dashboard');
    }

    public function destroy(User $user)
    {
        if ($user->image != '/murid/default.png') {
            Storage::delete($user->image);
        }
        Alert::success('Berhasil', 'User Terhapus');
        User::destroy($user->id);
        return redirect('/dashboard/murid');
    }


    public function password()
    {
        return view('dashboard.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            Alert::success('Berhasil', 'Berhasil ganti password');
            return back();
        }
        throw ValidationException::withMessages([
            'current_password' => 'Password tidak cocok'
        ]);
    }
}

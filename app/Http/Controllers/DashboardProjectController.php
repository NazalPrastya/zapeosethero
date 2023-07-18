<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardProjectController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard.project.index', [
    //         'projects' => Post::where('user_id', auth::guard('user')->user()->id)->get()
    //     ]);
    // }

    public function index()
    {
        if ((Auth::guard('admin')->user())) {
            $projects = Post::all();
        } elseif ((Auth::guard('user')->user())) {
            $projects = Post::where('user_id', Auth::guard('user')->user()->id)->get();
        }
        return view('dashboard.project.index', [
            'projects' => $projects,
            'hash' => new Hashids()
        ]);
    }


    public function create()
    {
        $siswas = User::all();
        return view('dashboard.project.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'sistem' => 'required|min:5|max:100',
            'keterangan' => 'required|min:10',
            'image' => 'required|file|max:2048',
            'link' => 'required|max:255',
            'vidio' => 'nullable|max:255'
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('project-images');
        }

        if ((Auth::guard('admin')->user())) {
            $validate['user_id'] = $request->input('user_id');
        } else {
            $validate['user_id'] = Auth::guard('user')->user()->id;
        }
        Post::create($validate);
        Alert::success('Berhasil', 'Berhasil menambahkan project');
        return redirect('/dashboard/project');
    }

    public function edit($id)
    {
        $hash = new Hashids();
        return view('dashboard.project.edit', [
            'project' => Post::findOrFail($hash->decodeHex($id)),
            'siswas' => User::all()
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'sistem' => 'required|min:5|max:100',
            'keterangan' => 'required|min:10',
            'image' => 'file|max:2048',
            'link' => 'required',
            'vidio' => 'nullable|max:255'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('projects-images');
        }

        if ((Auth::guard('admin')->user())) {
            $validate['user_id'] = $request->input('user_id');
        } else {
            $validate['user_id'] = Auth::guard('user')->user()->id;
        }
        $post->update($validate);
        Alert::success('Berhasil', 'Berhasil Update Project');
        return redirect('/dashboard/project');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);
        return redirect('/dashboard/project');
    }
}

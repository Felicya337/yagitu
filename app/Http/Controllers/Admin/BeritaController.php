<?php

// app/Http/Controllers/Admin/BeritaController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.admin-berita-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Berita::create($request->all());
        return redirect()->route('admin.berita.index');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.admin-berita-edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update($request->all());
        return redirect()->route('admin.berita.index');
    }

    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect()->route('admin.berita.index');
    }
}

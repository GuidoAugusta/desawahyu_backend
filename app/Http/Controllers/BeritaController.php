<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.berita.index', [
            'title' => 'berita',
            'beritas' => Berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.berita.create', [
            'title' => 'create berita'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeritaRequest $request)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required|max:255',
                'slug' => 'required|unique:beritas',
                'image' => 'image|file|mimes:jpeg,png,jpg|max:2048',
                'content' => 'required',
            ]
        );

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }

        $content = $request->content;
        $content = str_replace(["<br>", "<br/>", "<br />"], " ", $content);
        $content = strip_tags($content);
        $validatedData['excerpt'] = Str::limit($content, 300, '...');
        $validatedData['published_at'] = now();
        $validatedData['user_id'] = auth()->id();

        Berita::create($validatedData);
        return redirect('/dashboard/berita')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('dashboard.berita.show', [
            'title' => 'view berita',
            'berita' => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('dashboard.berita.edit', [
            'title' => 'edit berita',
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        $rules =
            [
                'title' => 'required|max:255',
                'image' => 'image|file|mimes:jpeg,png,jpg|max:2048',
                'content' => 'required',
            ];

        if ($request->slug != $berita->slug) {
            $rules['slug'] = 'required|unique:beritas';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }

        $validatedData['excerpt'] = Str::limit(str_replace("\n", " ", strip_tags($request->content)), 300, '...');
        $validatedData['published_at'] = now();
        $validatedData['user_id'] = auth()->id();

        Berita::where('id', $berita->id)->update($validatedData);
        return redirect('/dashboard/berita')->with('success', 'Berita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        if ($berita->image) {
            Storage::delete($berita->image);
        }
        Berita::destroy($berita->id);
        return redirect('/dashboard/berita')->with('success', 'Berita berhasil dihapus');
    }

    public function showDetailBerita($slug)
    {
        // Ambil objek Berita berdasarkan slug
        $berita = Berita::where('slug', $slug)->first();

        // Inkrementasi views_count
        if ($berita) {
            $berita->increment('views_count');
        }

        return view('detailBerita', [
            'title' => 'Detail Berita',
            'berita' => $berita,
            'beritaTerbaru' => Berita::where('slug', '!=', $slug)->orderBy('published_at', 'desc')->take(3)->get()
        ]);
    }
}

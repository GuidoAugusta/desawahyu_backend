<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;
use GuzzleHttp\Psr7\Request;

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
        return $request;
        // $validated = $request->validate([
        //     'title' => 'required|max:255',
        //     'content' => 'required|text',
        //     'image_path' => 'required|mimes:jpg,jpeg,png|max:2048'
        // ]);
        // // dd($validated);

        // // Menyimpan path gambar jika ada
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images', 'public');
        // } else {
        //     $imagePath = null;
        // }

        // Berita::create($validated);

        // return redirect('/dashboard/berita')->with('status', 'Post created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Berita::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}

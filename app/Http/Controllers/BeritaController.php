<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;
use GuzzleHttp\Psr7\Request;
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
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'required',
            ]
        );

        $validatedData['excerpt'] = Str::limit(str_replace("\n", " ", strip_tags($request->content)), 300, '...');
        $validatedData['published_at'] = now();

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
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'required',
            ];

        if ($request->slug != $berita->slug) {
            $rules['slug'] = 'required|unique:beritas';
        }

        $validatedData = $request->validate($rules);

        $validatedData['excerpt'] = Str::limit(str_replace("\n", " ", strip_tags($request->content)), 300, '...');
        $validatedData['published_at'] = now();

        Berita::where('id', $berita->id)->update($validatedData);
        return redirect('/dashboard/berita')->with('success', 'Berita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        Berita::destroy($berita->id);
        return redirect('/dashboard/berita')->with('success', 'Berita berhasil dihapus');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Berita::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}

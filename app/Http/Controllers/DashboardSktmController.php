<?php

namespace App\Http\Controllers;

use App\Models\Sktm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSktmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('dashboard.surat.sktm', [
        'title' => 'sktm',
        'sktm' => Sktm::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'nama' => 'required|max:255',
        'nik' => 'required|max:16',
        'jenis_kelamin' => 'required',
        'tempat' => 'required',
        'tanggal_lahir' => 'required',
        'agama' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'email' => 'required',
        'ktp' => 'required|mimes:jpg,jpeg,png|max:2048'
      ]);

      if ($request->file('ktp')) {
        $validated['ktp'] = $request->file('ktp')->store('ktp');
      }

      $validated['user_id'] = auth()->id();

      sktm::create($validated);

      return redirect('/surat')->with('SendSuccess', 'Surat SKTM berhasil dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sktm $sktm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sktm $sktm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sktm $sktm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sktm $sktm)
    {
      Sktm::destroy($sktm->id);
      Storage::delete($sktm->ktp);  

      return redirect('/dashboard/sktm')->with('status', 'Delete Posts Success');
    }

    public function acceptStatus($id){
      $sktm = Sktm::findOrFail($id);

      if ($sktm->status == 'Menunggu') {
        $sktm->status = 'Diterima';
      } 
      $sktm->save();

      return redirect()->back()->with('success', 'Status berhasil diubah.');
    }

    public function rejectStatus(Request $request, $id)
    {
      // return dd($request); 
      $request->validate([
        'alasan' => 'required|string',
      ]);

      $sktm = Sktm::findOrFail($id);

      if ($sktm->status == 'Menunggu') {
        $sktm->status = 'Ditolak';
        $sktm->alasan = $request->input('alasan');
      }
      $sktm->save();

      return redirect()->back()->with('success', 'Status berhasil diubah.');
    }

    public function cetak($id)
    {
      $sktm = sktm::findOrFail($id);
        
      return view('dashboard.surat.sktm_pdf', [
        'title' => 'sktm pdf',
        'sktm' => $sktm
      ]);
    }
}

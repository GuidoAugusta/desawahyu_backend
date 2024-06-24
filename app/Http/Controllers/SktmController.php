<?php

namespace App\Http\Controllers;

use App\Models\Sktm;
use App\Http\Requests\StoreSktmRequest;
use App\Http\Requests\UpdateSktmRequest;
use Illuminate\Support\Facades\Storage;

class SktmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSktmRequest $request)
    {
        //
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
    public function update(UpdateSktmRequest $request, Sktm $sktm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
      public function destroy($nik)
      {
        $sktm = Sktm::where('nik', $nik)->first();
        // Sktm::destroy($sktm); error
        if ($sktm) {
          Storage::delete($sktm->ktp);
          $sktm->delete();
  
          return redirect('/status-surat')->with('success', 'Data berhasil dihapus');
        }
      }

    public function cetak($nik)
    {
      $sktm = Sktm::where('nik', $nik)->first();
      if (!$sktm) {
        return redirect()->back()->with('error', 'Data tidak ditemukan');
      }
      return view('cetak.sktm_pdf', compact('sktm'));
    }
}

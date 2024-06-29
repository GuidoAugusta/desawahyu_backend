<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendPdfMail;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
  public function sendEmail(Request $request)
  {        
    // dd($request);
    $request->validate([
      'email' => 'required|email',
      'pdf_file' => 'nullable|file|mimes:pdf|max:2048'
    ]); 

    $email = $request->email;
    $nama = $request->nama;
    $surat = $request->surat;
    
    $file = $request->file('pdf_file');
    $originalFileName = $file->getClientOriginalName();
    $pdfPath = $file->storeAs('pdfs', $originalFileName);

    Mail::to($email)->send(new SendPdfMail($pdfPath, $nama, $surat));
    Storage::delete($pdfPath);  
    return back()->with('SendSuccess', 'Surat Berhasil dikirim.');
  }
}
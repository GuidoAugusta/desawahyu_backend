<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Berita;

Route::get('/', function () {
  $beritas = Berita::paginate(6);

  $galeri = [
    [
      'img' => 'https://i.pinimg.com/564x/5a/e7/f4/5ae7f4852a91687da8802f1642a46ed1.jpg',
      'url' => '#'
    ],
    [
      'img' => 'https://i.pinimg.com/564x/48/52/a6/4852a6fe7980f4e99f9f6bc8288739d5.jpg',
      'url' => '#'
    ],
    [
      'img' => 'https://i.pinimg.com/564x/10/dc/98/10dc98d5f81a74a42625db16cd070a77.jpg',
      'url' => '#'
    ],
    [
      'img' => 'https://i.pinimg.com/564x/8b/86/e9/8b86e9ec9a993534375d44269d718003.jpg',
      'url' => '#'
    ],
    [
      'img' => 'https://i.pinimg.com/564x/00/49/08/004908df6908bb32af3d9c29eae524a9.jpg',
      'url' => '#'
    ],
    [
      'img' => 'https://i.pinimg.com/564x/d4/b6/3c/d4b63c9aad939006d047bcd55bb834fc.jpg',
      'url' => '#'
    ]
  ];

  return view('home', [
    'title' => 'home',
    'beritas' => $beritas,
    'galeri' => $galeri
  ]);
});

Route::get('/aboutus', function () {
  return view('aboutUs', [
    'title' => 'tentang kami'
  ]);
});

Route::get('/visimisi', function () {
  return view('visimisi', [
    'title' => 'visi misi'
  ]);
});

Route::get('/sejarahdesa', function () {
  return view('sejarahdesa', [
    'title' => 'sejarah desa'
  ]);
});

Route::get('/surat', function () {
  return view('surat', [
    'title' => 'surat'
  ]);
})->middleware('auth');

Route::get('/status-surat', function () {
  return view('statusSurat', [
    'title' => 'status surat'
  ]);
})->middleware('auth');

Route::get('/surat/sktm', function () {
  return view('daftarSurat.sktm', [
    'title' => 'surat sktm'
  ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', [LoginController::class, 'admin']);
Route::post('/admin', [LoginController::class, 'authAdmin']);

Route::get('/dashboard', [AdminController::class, 'index'])->middleware('admin');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('admin');

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::resource('/dashboard/berita', BeritaController::class)->parameters([
  'berita' => 'berita'
])->middleware('admin');

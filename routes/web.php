<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Berita;
use App\Http\Controllers\DashboardSktmController;
use App\Http\Controllers\SktmController;
use App\Models\Sktm;

Route::get('/', function () {
  $beritas = Berita::paginate(6);

  $galeri = [
    [
      'img' => '/images/pemandangan.jpg',
      'url' => '#'
    ],
    [
      'img' => '/images/pemandian.jpg',
      'url' => '#'
    ],
    [
      'img' => '/images/kudalumping.jpg',
      'url' => '#'
    ],
    [
      'img' => '/images/sunrice.jpg',
      'url' => '#'
    ],
    [
      'img' => '/images/panen_padi.jpg',
      'url' => '#'
    ],
    [
      'img' => '/images/wayang.jpeg',
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
})->middleware(['auth', 'check.status']);

Route::get('/status-surat', function () {
  $user = auth()->user();
  return view('statusSurat', [
    'title' => 'status surat',
    // 'surat' => Sktm::where('user_id', auth()->user()->id)->get()
    'surat' => $user->sktm
  ]);
})->middleware(['auth', 'check.status']);

Route::get('/surat/sktm', function () {
  return view('daftarSurat.form_sktm', [
    'title' => 'surat sktm'
  ]);
});

Route::get('/dashboard', [AdminController::class, 'index'])->middleware('admin');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', [LoginController::class, 'admin']);
Route::post('/admin', [LoginController::class, 'authAdmin']);

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::resource('/dashboard/berita', BeritaController::class)->parameters([
  'berita' => 'berita'
])->middleware('admin');

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/sktm', DashboardSktmController::class);
Route::patch('/sktm/{id}/acceptStatus', [DashboardSktmController::class, 'acceptStatus']);
Route::post('/sktm/{id}/rejectStatus', [DashboardSktmController::class, 'rejectStatus']);
// pdf
Route::get('/dashboard/sktm/{id}/cetak', [DashboardSktmController::class, 'cetak']);
// email
Route::post('/send-email', [EmailController::class, 'sendEmail']);

// sktm controller
Route::get('/cetak/sktm/{id}', [SktmController::class, 'cetak']);
Route::delete('/hapus/sktm/{id}', [SktmController::class, 'destroy']);

Route::get('/test', function () {
  return view('test', [
    'title' => 'test',
    'surat' => App\Models\Sktm::all(),
  ]);
});
